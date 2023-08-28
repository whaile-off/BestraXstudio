document.addEventListener("DOMContentLoaded", function () {
    const categories = document.querySelectorAll(".categories li");

    categories.forEach(category => {
        category.addEventListener("click", function () {
            const categoryId = this.getAttribute("data-id");

            categories.forEach(cat => {
                cat.classList.remove("active");
            });
            this.classList.add("active");

            const productTabs = document.querySelectorAll(".products .tab-id");
            productTabs.forEach(tab => {
                tab.classList.remove("active");
            });

            const selectedTab = document.querySelector(`.products .tab-id[data-id="${categoryId}"]`);
            selectedTab.classList.add("active");
        });
    });

    const shop = document.getElementById("shop");
    const news = document.getElementById("news");
    const arrowLeft = document.querySelectorAll('.arrow-left');
    const arrowRight = document.querySelectorAll('.arrow-right');
    const cards = document.querySelectorAll('.cards');
    let cardWidth;

    if (window.innerWidth <= 1000) {
        cardWidth = document.querySelector('.card').offsetWidth + 100;
    } else {
        cardWidth = document.querySelector('.card').offsetWidth + 128;
    }

    shop.addEventListener('click', () => {
        document.querySelector(".shop").scrollIntoView({ behavior: 'smooth' });
    });

    news.addEventListener('click', () => {
        document.querySelector(".top-content").scrollIntoView({ behavior: 'smooth' });
    });

    arrowLeft.forEach(button => {
        button.addEventListener('click', function () {
            cards.forEach(card => {
                card.scrollLeft -= cardWidth;
            });
        });
    });

    arrowRight.forEach(button => {
        button.addEventListener('click', function () {
            cards.forEach(card => {
                card.scrollLeft += cardWidth;
            });
        });
    });
});

const itemElements = document.querySelectorAll('.item-id');

const rateWindow = document.getElementById('rate');
const rateContent = rateWindow.querySelector('#okno');

function openRateWindow(content) {
    rateContent.innerHTML = content.innerHTML;

    rateWindow.style.display = 'flex';
}

itemElements.forEach(item => {
    item.addEventListener('click', () => {
	window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        openRateWindow(item);
    });
});

const rateWindows = document.querySelectorAll('#rate');

rateWindows.forEach(rateWindow => {
    rateWindow.addEventListener('wheel', function (event) {
        event.preventDefault();
    });
});
