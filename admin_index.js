// Sample menu data
const menuItems = [
    { name: "Paneer Tikka", price: "$10.99" },
    { name: "Chicken Biryani", price: "$12.99" },
    { name: "Veg Thali", price: "$8.99" },
    // Add more menu items here
  ];
  
  // Function to populate menu items
  function populateMenu() {
    const menuContainer = document.getElementById("menuItems");
    menuItems.forEach(item => {
      const menuItem = document.createElement("div");
      menuItem.classList.add("menu-item");
      menuItem.innerHTML = `
        <h3>${item.name}</h3>
        <p>${item.price}</p>
      `;
      menuContainer.appendChild(menuItem);
    });
  }
  
  // Call the function to populate menu items
  populateMenu();
  