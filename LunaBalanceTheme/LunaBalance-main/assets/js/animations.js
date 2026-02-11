document.addEventListener('DOMContentLoaded', function() {
    
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    const sections = document.querySelectorAll('.wp-block-group');
    sections.forEach(section => {
        if (!section.querySelector('h4')) {
            section.classList.add('fade-in');
            observer.observe(section);
        }
    });
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1 && href !== 'javascript:void(0);') {
                e.preventDefault();

                const target = document.querySelector(href);
                if (target) {
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - 80;
                    window.scrollTo({ top: targetPosition, behavior: 'smooth' });

                    setTimeout(() => {
                        try {
                            target.setAttribute('tabindex', '-1');
                            target.focus({ preventScroll: true });
                        } catch (err) {
                        }
                    }, 600);
                } else {
                    window.location.href = href;
                }
            }
        });
    });
    
    setTimeout(() => {
        const allHeadings = document.querySelectorAll('h2');
        let eventSection = null;
        
        allHeadings.forEach(h2 => {
            if (h2.textContent.trim().includes('UPCOMING EVENTS')) {
                eventSection = h2;
            }
        });
        
        if (eventSection) {
            const eventContainer = eventSection.closest('.wp-block-group');
            const columnsContainer = eventContainer.querySelector('.wp-block-columns.are-vertically-aligned-center');
            
            if (columnsContainer) {
                const centerColumn = columnsContainer.querySelector('.wp-block-column[style*="50%"]');
                
                if (centerColumn) {
                    const eventImage = centerColumn.querySelector('img');
                    const eventTitle = centerColumn.querySelector('h3');
                    const eventDate = centerColumn.querySelector('h3 + p');
                    
                    let dotsContainer = null;
                    const allParagraphs = centerColumn.querySelectorAll('p');
                    allParagraphs.forEach(p => {
                        if (p.textContent.includes('●') || p.textContent.includes('○')) {
                            dotsContainer = p;
                        }
                    });
                    
                    if (!dotsContainer) {
                        dotsContainer = document.createElement('p');
                        dotsContainer.style.cssText = 'text-align: center; margin-top: 1.5rem;';
                        eventDate.parentNode.insertBefore(dotsContainer, eventDate.nextSibling);
                    }
                    
                    if (eventImage && eventTitle && eventDate && dotsContainer) {
                        eventImage.classList.add('event-carousel-image');
                        const imageParent = eventImage.parentNode;
                        if (imageParent) {
                            imageParent.style.position = imageParent.style.position || 'relative';
                            imageParent.style.overflow = 'hidden';
                        }

                        const overlayImg = document.createElement('img');
                        overlayImg.classList.add('event-carousel-image', 'event-carousel-overlay');
                        overlayImg.style.opacity = '0';
                        overlayImg.style.pointerEvents = 'none';
                        overlayImg.alt = '';
                        if (imageParent) imageParent.appendChild(overlayImg);
                        eventTitle.classList.add('event-carousel-title');
                        eventDate.classList.add('event-carousel-date');
                        
                        eventImage.style.opacity = '1';
                        eventTitle.style.opacity = '1';
                        eventDate.style.opacity = '1';
                        
                        const events = [
                            {
                                image: eventImage.src,
                                title: 'Harmonic Reiki',
                                date: '04 mars 12:00 - 13:30',
                                id: 'harmonic-reiki'
                            },
                            {
                                image: 'http://lunabalance.local/wp-content/uploads/2026/02/maryjoy-caballero-6c9vcD2BSDM-unsplash-scaled.jpg',
                                title: 'Morning Flow Workshop',
                                date: '11 mars 09:00 - 10:30',
                                id: 'morning-flow-workshop'
                            },
                            {
                                image: 'http://lunabalance.local/wp-content/uploads/2026/02/photo-1578261260136-01d62b2d7d9e.avif',
                                title: 'Kundalini Awakening',
                                date: '18 mars 18:00 - 20:00',
                                id: 'kundalini-event'
                            }
                        ];
                        
                        let currentEventIndex = 0;
                        
                        dotsContainer.innerHTML = '';
                        dotsContainer.style.cssText = 'text-align: center; margin-top: 1.5rem;';
                        dotsContainer.classList.add('event-dots-container');
                        
                        events.forEach((_, index) => {
                            const dot = document.createElement('span');
                            dot.className = 'event-dot';
                            dot.textContent = '●';
                            dot.style.cssText = `
                                margin: 0 0.3rem; 
                                cursor: pointer; 
                                transition: all 0.4s ease;
                                opacity: ${index === 0 ? '0.7' : '0.9'};
                                font-size: 1.5rem;
                                color: ${index === 0 ? '#92A090' : '#C7B8A9'};
                            `;
                            
                            dot.addEventListener('click', () => changeEvent(index));
                            dotsContainer.appendChild(dot);
                        });
                        
                        function changeEvent(index) {
                            if (index === currentEventIndex) return;

                            overlayImg.src = events[index].image;
                            overlayImg.alt = events[index].title;

                            eventTitle.style.opacity = '0';
                            eventDate.style.opacity = '0';

                            overlayImg.onload = () => {
                                requestAnimationFrame(() => {
                                    overlayImg.style.opacity = '1';
                                });

                                const transitionDuration = 850;
                                setTimeout(() => {
                                    currentEventIndex = index;

                                    eventImage.src = events[index].image;
                                    eventImage.alt = events[index].title;

                                    eventTitle.textContent = events[index].title;
                                    eventDate.textContent = events[index].date;

                                    const bookButton = centerColumn.querySelector('.wp-block-button__link');
                                    if (bookButton) {
                                        bookButton.setAttribute('data-event-id', events[index].title);
                                    }

                                    const dotsNow = centerColumn.querySelector('.event-dots-container');
                                    if (dotsNow) {
                                        const allDots = dotsNow.querySelectorAll('.event-dot');
                                        allDots.forEach((dot, i) => {
                                            if (i === index) {
                                                dot.style.opacity = '1';
                                                dot.style.color = '#92A090';
                                            } else {
                                                dot.style.opacity = '0.3';
                                                dot.style.color = '#C7B8A9';
                                            }
                                        });
                                    }

                                    overlayImg.style.opacity = '0';

                                    setTimeout(() => {
                                        eventTitle.style.opacity = '1';
                                        eventDate.style.opacity = '1';
                                    }, 50);
                                }, transitionDuration);
                            };

                            if (overlayImg.complete) overlayImg.onload();
                        }
                        
                        setInterval(() => {
                            const nextIndex = (currentEventIndex + 1) % events.length;
                            changeEvent(nextIndex);
                        }, 5000);
                    }
                }
            }
        }
    }, 1500);

    const classDetails = {
        "Morning Flow": {
            duration: "60 min",
            level: "Beginner",
            description: "Start your day with gentle movements and breathwork. Perfect for beginners looking to build strength and flexibility.",
            benefits: ["Increased energy", "Improved flexibility", "Better focus"],
            whatToBring: ["Yoga mat", "Water bottle", "Comfortable clothing"]
        },
        "Deep Meditative Focus": {
            duration: "90 min",
            level: "Intermediate",
            description: "Dive deep into mindfulness with extended meditation and gentle asanas designed to calm the mind.",
            benefits: ["Deep relaxation", "Mental clarity", "Stress reduction"],
            whatToBring: ["Yoga mat", "Meditation cushion (optional)", "Blanket"]
        },
        "Kundalini Yoga": {
            duration: "120 min",
            level: "Advanced",
            description: "Awaken your inner energy through powerful breathing techniques, mantras, and dynamic movements.",
            benefits: ["Energy awakening", "Spiritual growth", "Enhanced vitality"],
            whatToBring: ["Yoga mat", "White clothing (traditional)", "Open mind"]
        },
        "Beginner Yoga Class": {
            duration: "60 min",
            level: "Beginner",
            description: "Learn the fundamentals of yoga in a supportive environment. No experience necessary.",
            benefits: ["Build foundation", "Gain confidence", "Learn proper alignment"],
            whatToBring: ["Yoga mat", "Water bottle", "Comfortable clothing"]
        },
        "Classic Reiki Cleanse": {
            duration: "45 min",
            level: "Intermediate",
            description: "Experience the healing power of Reiki energy work to restore balance and harmony.",
            benefits: ["Energy balance", "Emotional healing", "Deep relaxation"],
            whatToBring: ["Comfortable clothing", "Open heart"]
        },
        "Advanced Asana": {
            duration: "60 min",
            level: "Advanced",
            description: "Challenge yourself with complex poses and sequences. Strong foundation required.",
            benefits: ["Advanced strength", "Perfect alignment", "Personal growth"],
            whatToBring: ["Yoga mat", "Yoga blocks", "Strap"]
        },
        "Prenatal Yoga": {
            duration: "60 min",
            level: "Beginner",
            description: "Gentle yoga designed for expecting mothers. Build strength, flexibility, and connect with your baby through mindful movement.",
            benefits: ["Reduces pregnancy discomfort", "Improves sleep", "Prepares for childbirth"],
            whatToBring: ["Yoga mat", "Pregnancy pillow", "Water bottle"]
        },
        "Yin Yoga": {
            duration: "75 min",
            level: "Intermediate",
            description: "Slow-paced practice holding poses for longer periods. Deep stretching and meditation combined for ultimate relaxation.",
            benefits: ["Increased flexibility", "Deep relaxation", "Improved circulation"],
            whatToBring: ["Yoga mat", "Blanket", "Yoga blocks"]
        },
        "Power Vinyasa": {
            duration: "90 min",
            level: "Advanced",
            description: "Dynamic and challenging flow. Build heat, strength, and endurance through continuous movement and breath.",
            benefits: ["Cardiovascular fitness", "Full body strength", "Mental focus"],
            whatToBring: ["Yoga mat", "Towel", "Water bottle"]
        }
    };

    const modal = document.createElement('div');
    modal.className = 'class-modal';
    modal.innerHTML = `
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <h2 class="modal-title"></h2>
            <div class="modal-meta"></div>
            <div class="modal-description"></div>
            <div class="modal-benefits">
                <h3>Benefits</h3>
                <ul></ul>
            </div>
            <div class="modal-bring">
                <h3>What to Bring</h3>
                <ul></ul>
            </div>
            <button class="modal-book-btn">BOOK THIS CLASS</button>
        </div>
    `;
    document.body.appendChild(modal);

    modal.querySelector('.modal-close').addEventListener('click', () => {
        modal.classList.remove('active');
    });

    modal.querySelector('.modal-overlay').addEventListener('click', () => {
        modal.classList.remove('active');
    });

function setupClassCards() {
    const allClassCards = document.querySelectorAll(
        '#classes .wp-block-columns > .wp-block-column, ' +
        '.extra-classes > .wp-block-column'
    );
    
    console.log('Found class cards:', allClassCards.length);
    
    allClassCards.forEach((card) => {
        if (card.dataset.clickSetup === 'true') {
            return;
        }
        
        card.dataset.clickSetup = 'true';
        
        const title = card.querySelector('h3');
        if (!title) return;
        
        const className = title.textContent.trim();
        if (!classDetails[className]) {
            console.warn('No details for:', className);
            return;
        }
        
        console.log('Setting up card:', className);
        
        card.style.cursor = 'pointer';
        
        const group = card.querySelector('.wp-block-group');
        if (group) {
            group.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
        }
        
        card.addEventListener('mouseenter', function() {
            if (group) {
                group.style.transform = 'translateY(-8px)';
                group.style.boxShadow = '0 12px 24px rgba(47, 47, 47, 0.08)';
                group.style.zIndex = '10';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (group) {
                group.style.transform = 'translateY(0)';
                group.style.boxShadow = 'none';
                group.style.zIndex = '1';
            }
        });
        
        card.addEventListener('click', (e) => {
            e.stopPropagation();
            e.preventDefault();
            
            const details = classDetails[className];
            
            console.log('Opening modal for:', className);
            
            modal.querySelector('.modal-title').textContent = className;
            modal.querySelector('.modal-meta').textContent = `${details.duration} · ${details.level}`;
            modal.querySelector('.modal-description').textContent = details.description;
            
            const benefitsList = modal.querySelector('.modal-benefits ul');
            benefitsList.innerHTML = details.benefits.map(b => `<li>${b}</li>`).join('');
            
            const bringList = modal.querySelector('.modal-bring ul');
            bringList.innerHTML = details.whatToBring.map(i => `<li>${i}</li>`).join('');
            
            const bookBtn = modal.querySelector('.modal-book-btn');
            bookBtn.setAttribute('data-class', className);
            
            modal.classList.add('active');
        });
    });
}

setTimeout(() => {
    console.log('Running initial card setup...');
    setupClassCards();
}, 1500);
    
    modal.querySelector('.modal-book-btn').addEventListener('click', function() {
        const className = this.getAttribute('data-class');
        modal.classList.remove('active');
        showBookingForm(className, 'class');
    });
    
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('wp-block-button__link') && e.target.hasAttribute('data-event-id')) {
            e.preventDefault();
            const eventId = e.target.getAttribute('data-event-id');
            showBookingForm(eventId, 'event');
        }
    });
    
    function showBookingForm(itemId, type) {
        const bookingModal = document.createElement('div');
        bookingModal.className = 'luna-modal luna-booking-modal active';
        bookingModal.innerHTML = `
            <div class="luna-modal-overlay"></div>
            <div class="luna-modal-content">
                <button class="luna-modal-close">×</button>
                <h2>Book Your Session</h2>
                <p class="luna-modal-meta">Booking: ${itemId}</p>
                <form class="luna-booking-form">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Preferred Date *</label>
                        <input type="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="luna-submit-btn">CONFIRM BOOKING</button>
                </form>
            </div>
        `;
        
        document.body.appendChild(bookingModal);
        
        bookingModal.querySelector('.luna-modal-close').addEventListener('click', () => {
            bookingModal.classList.remove('active');
            setTimeout(() => bookingModal.remove(), 300);
        });
        
        bookingModal.querySelector('.luna-modal-overlay').addEventListener('click', () => {
            bookingModal.classList.remove('active');
            setTimeout(() => bookingModal.remove(), 300);
        });
        
        bookingModal.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Booking received! We will contact you shortly.');
            bookingModal.classList.remove('active');
            setTimeout(() => bookingModal.remove(), 300);
        });
    }
    
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.wp-block-cover');
        
        parallaxElements.forEach(element => {
            const speed = 0.2;
            const yPos = -(scrolled * speed);
            element.style.transform = `translate3d(0, ${yPos}px, 0)`;
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    const toggleBtn = document.querySelector('.more-classes-toggle a');
    const classesGrid = document.querySelector('.classes-grid');
    
    if (toggleBtn && classesGrid) {
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            classesGrid.classList.toggle('expanded');
            
            if (classesGrid.classList.contains('expanded')) {
                setTimeout(() => {
                    setupClassCards();
                    document.querySelector('.extra-classes').scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'nearest' 
                    });
                }, 100);
            }
        });
    }

    (function() {
        const overlay = document.createElement('div');
        overlay.className = 'luna-mobile-menu-overlay';
        document.body.appendChild(overlay);
        
        setTimeout(() => {
            const menuToggle = document.querySelector('.luna-main-nav .wp-block-navigation__responsive-container-open, .luna-main-nav button[aria-label*="Open"]');
            const menuContainer = document.querySelector('.luna-main-nav .wp-block-navigation__responsive-container');
            
            function openMenu() {
                if (menuContainer) {
                    menuContainer.classList.add('is-menu-open');
                    overlay.classList.add('active');
                    document.body.classList.add('menu-open');
                }
            }
            
            function closeMenu() {
                if (menuContainer) {
                    menuContainer.classList.remove('is-menu-open');
                    overlay.classList.remove('active');
                    document.body.classList.remove('menu-open');
                }
            }
            
            if (menuToggle) {
                menuToggle.addEventListener('click', openMenu);
            }
            
            setTimeout(() => {
                const menuClose = document.querySelector('.luna-main-nav .wp-block-navigation__responsive-close, .luna-main-nav .is-menu-open button[aria-label*="Close"]');
                if (menuClose) {
                    menuClose.addEventListener('click', closeMenu);
                }
            }, 100);
            
            overlay.addEventListener('click', closeMenu);
            
            document.addEventListener('click', (e) => {
                if (e.target.matches('.luna-main-nav .is-menu-open .wp-block-navigation-item a')) {
                    closeMenu();
                }
            });
            
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeMenu();
                }
            });
        }, 1000);
    })();

});