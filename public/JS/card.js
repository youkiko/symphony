document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');
    const row = document.querySelector('.row');

    // Ajout des boutons de filtre
    const filterContainer = document.createElement('div');
    filterContainer.className = 'filter-buttons';
    filterContainer.innerHTML = `
        <button class="filter-btn active" data-filter="all">Tous</button>
        <button class="filter-btn" data-filter="junior">Juniors</button>
        <button class="filter-btn" data-filter="senior">Seniors</button>
    `;

    // Ajout de la barre de recherche
    const searchContainer = document.createElement('div');
    searchContainer.className = 'search-container';
    searchContainer.innerHTML = `
        <input type="text" class="search-input" placeholder="Rechercher un utilisateur...">
    `;

    document.querySelector('.container h1').after(searchContainer);
    searchContainer.after(filterContainer);

    function reorganizeCards() {
        const visibleCards = Array.from(cards).filter(
            (card) => card.style.display !== 'none'
        );

        visibleCards.forEach((card, index) => {
            const parentCol = card.closest('.col-md-4');
            row.appendChild(parentCol);

            // Animation de réorganisation
            setTimeout(() => {
                parentCol.style.animation = 'moveCard 0.5s ease-out forwards';
            }, index * 100);
        });
    }

    // Filtre par catégorie
    document.querySelectorAll('.filter-btn').forEach((button) => {
        button.addEventListener('click', function () {
            // Retirer la classe active de tous les boutons
            document
                .querySelectorAll('.filter-btn')
                .forEach((btn) => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;

            cards.forEach((card) => {
                if (filter === 'all') {
                    card.style.display = 'block';
                } else if (
                    filter === 'junior' &&
                    card.querySelector('.bg-success')
                ) {
                    card.style.display = 'block';
                } else if (
                    filter === 'senior' &&
                    card.querySelector('.bg-primary')
                ) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // Réorganiser après le filtrage
            reorganizeCards();
        });
    });

    // Recherche en temps réel
    const searchInput = document.querySelector('.search-input');
    searchInput.addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase();

        cards.forEach((card) => {
            const name = card
                .querySelector('.card-title')
                .textContent.toLowerCase();
            const profession = card
                .querySelector('.card-text')
                .textContent.toLowerCase();

            if (name.includes(searchTerm) || profession.includes(searchTerm)) {
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.5s ease-in';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
