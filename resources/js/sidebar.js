document.addEventListener("DOMContentLoaded", function () {
    let isClient = false;
    let activeContent = ""; // Set this dynamically based on user action

    function renderContent() {
        const container = document.getElementById("content"); // Target container for rendering

        switch (activeContent) {
            case "management-category":
                container.innerHTML = "<h2>College Lab A</h2>"; // Replace with actual HTML content
                break;
            case "management-accounts":
                container.innerHTML = "<h2>College Lab B</h2>";
                break;
            case "manage-product":
                container.innerHTML = "<h2>ICT Lab</h2>";
                break;
            case "order-management":
                container.innerHTML = "<h2>ICT Lab</h2>";
                break;
            default:
                container.innerHTML = "<h2>Admin Home</h2>";
        }
    }

    function updateState(newContent) {
        activeContent = newContent;
        if (activeContent === "logout") {
            window.location.href = "/adminlogin";
        } else {
            renderContent();
        }
    }

    // Example usage (simulate content change)
    isClient = true;
    updateState("sidebar"); // Change "laboratory" to test different cases
});
