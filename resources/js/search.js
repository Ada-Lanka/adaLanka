// Search functionality for the categories section
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const suggestionsContainer = document.getElementById("search-suggestions");

    // Sample search data - this would typically come from an API
    const searchData = [
        "Politics News",
        "Health Updates",
        "Energy Sector",
        "Technology News",
        "Entertainment Stories",
        "Business Reports",
        "Sports Updates",
        "Political Analysis",
        "Healthcare Tips",
        "Renewable Energy",
        "Tech Reviews",
        "Celebrity News",
        "Market Analysis",
        "Football Results",
    ];

    // Show suggestions based on input
    function showSuggestions(query) {
        if (!query.trim()) {
            suggestionsContainer.classList.add("hidden");
            return;
        }

        const filteredData = searchData.filter((item) =>
            item.toLowerCase().includes(query.toLowerCase())
        );

        if (filteredData.length > 0) {
            suggestionsContainer.innerHTML = filteredData
                .slice(0, 5) // Limit to 5 suggestions
                .map(
                    (item) => `
                    <div class="suggestion-item p-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer border-b border-gray-200 dark:border-gray-600 last:border-b-0">
                        ${item}
                    </div>
                `
                )
                .join("");
            suggestionsContainer.classList.remove("hidden");
        } else {
            suggestionsContainer.innerHTML =
                '<div class="p-2 text-gray-500 dark:text-gray-400">No suggestions found</div>';
            suggestionsContainer.classList.remove("hidden");
        }
    }

    // Hide suggestions
    function hideSuggestions() {
        setTimeout(() => {
            suggestionsContainer.classList.add("hidden");
        }, 200); // Small delay to allow clicking on suggestions
    }

    // Handle search
    function performSearch(query) {
        if (!query.trim()) return;

        // For now, just log the search query
        // In a real application, you would redirect to search results or make an API call
        console.log("Searching for:", query);
        alert(`Searching for: ${query}`);

        // Hide suggestions after search
        suggestionsContainer.classList.add("hidden");
    }

    // Event listeners
    if (searchInput) {
        searchInput.addEventListener("input", function () {
            showSuggestions(this.value);
        });

        searchInput.addEventListener("focus", function () {
            if (this.value.trim()) {
                showSuggestions(this.value);
            }
        });

        searchInput.addEventListener("blur", hideSuggestions);

        searchInput.addEventListener("keypress", function (e) {
            if (e.key === "Enter") {
                e.preventDefault();
                performSearch(this.value);
            }
        });
    }

    if (searchButton) {
        searchButton.addEventListener("click", function () {
            performSearch(searchInput.value);
        });
    }

    // Handle suggestion clicks
    if (suggestionsContainer) {
        suggestionsContainer.addEventListener("click", function (e) {
            if (e.target.classList.contains("suggestion-item")) {
                const selectedText = e.target.textContent.trim();
                searchInput.value = selectedText;
                performSearch(selectedText);
            }
        });
    }
});
