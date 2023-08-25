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
});