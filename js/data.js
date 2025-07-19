const productsArray = [
  {
    id: 1,
    name: "HP EliteBook 840",
    price: "$699",
    desc: "Powerful business laptop with sleek design.",
    img: "https://via.placeholder.com/300x200?text=HP+EliteBook+840",
    specs: "Intel i5, 8GB RAM, 256GB SSD, 14'' FHD"
  },
  {
    id: 2,
    name: "Dell XPS 13",
    price: "$999",
    desc: "Ultra-portable, high-performance ultrabook.",
    img: "https://via.placeholder.com/300x200?text=Dell+XPS+13",
    specs: "Intel i7, 16GB RAM, 512GB SSD, 13.3'' FHD"
  },
  {
    id: 3,
    name: "Lenovo ThinkCentre",
    price: "$499",
    desc: "Reliable desktop for office and home.",
    img: "https://via.placeholder.com/300x200?text=Lenovo+ThinkCentre",
    specs: "Intel i5, 8GB RAM, 1TB HDD, Windows 10 Pro"
  },
  {
    id: 4,
    name: "Logitech Keyboard",
    price: "$49",
    desc: "Ergonomic keyboard for comfortable typing.",
    img: "https://via.placeholder.com/300x200?text=Logitech+Keyboard",
    specs: "Wireless, Full-size, 2-year battery life"
  },
  {
    id: 5,
    name: "HP Wireless Mouse",
    price: "$29",
    desc: "Smooth, precise, and wireless control.",
    img: "https://via.placeholder.com/300x200?text=HP+Wireless+Mouse",
    specs: "Wireless, 1600 DPI, 12-month battery"
  },
  {
    id: 6,
    name: "Asus ROG Zephyrus",
    price: "$1499",
    desc: "High-end gaming laptop for enthusiasts.",
    img: "https://via.placeholder.com/300x200?text=Asus+ROG+Zephyrus",
    specs: "AMD Ryzen 9, 32GB RAM, 1TB SSD, RTX 3080"
  }
];

const laptopProducts = [
    // HP
    { title: 'HP EliteBook 840', price: 250000, priceDisplay: 'Rs. 250,000', stock: 'In Stock', img: '' },
    { title: 'HP Pavilion 15', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '' },
    { title: 'HP Spectre x360', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '' },
    { title: 'HP Envy 13', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'HP ProBook 450', price: 195000, priceDisplay: 'Rs. 195,000', stock: 'In Stock', img: '' },
    { title: 'HP Omen 16', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '' },
    { title: 'HP Chromebook 14', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '' },
    { title: 'HP ZBook Firefly', price: 400000, priceDisplay: 'Rs. 400,000', stock: 'In Stock', img: '' },
    // Dell
    { title: 'Dell Inspiron 15', price: 170000, priceDisplay: 'Rs. 170,000', stock: 'In Stock', img: '' },
    { title: 'Dell XPS 13', price: 330000, priceDisplay: 'Rs. 330,000', stock: 'In Stock', img: '' },
    { title: 'Dell Latitude 5420', price: 220000, priceDisplay: 'Rs. 220,000', stock: 'In Stock', img: '' },
    { title: 'Dell Vostro 3500', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '' },
    { title: 'Dell G5 15', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '' },
    { title: 'Dell Alienware m15', price: 450000, priceDisplay: 'Rs. 450,000', stock: 'In Stock', img: '' },
    { title: 'Dell Precision 5550', price: 390000, priceDisplay: 'Rs. 390,000', stock: 'In Stock', img: '' },
    { title: 'Dell XPS 17', price: 410000, priceDisplay: 'Rs. 410,000', stock: 'In Stock', img: '' },
    // ThinkPad
    { title: 'ThinkPad X1 Carbon', price: 340000, priceDisplay: 'Rs. 340,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad T14', price: 230000, priceDisplay: 'Rs. 230,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad L13 Yoga', price: 200000, priceDisplay: 'Rs. 200,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad E15', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad P15', price: 370000, priceDisplay: 'Rs. 370,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad X13', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad L14', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad E14', price: 175000, priceDisplay: 'Rs. 175,000', stock: 'In Stock', img: '' },
    // Lenovo
    { title: 'Lenovo IdeaPad 3', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Legion 5', price: 260000, priceDisplay: 'Rs. 260,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Yoga Slim 7', price: 290000, priceDisplay: 'Rs. 290,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo ThinkBook 15', price: 185000, priceDisplay: 'Rs. 185,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo V14', price: 125000, priceDisplay: 'Rs. 125,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Flex 5', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Legion 7', price: 420000, priceDisplay: 'Rs. 420,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Yoga 9i', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '' },
    // Asus
    { title: 'Asus VivoBook 15', price: 155000, priceDisplay: 'Rs. 155,000', stock: 'In Stock', img: '' },
    { title: 'Asus ZenBook 14', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'Asus ROG Zephyrus G14', price: 370000, priceDisplay: 'Rs. 370,000', stock: 'In Stock', img: '' },
    { title: 'Asus TUF Gaming F15', price: 240000, priceDisplay: 'Rs. 240,000', stock: 'In Stock', img: '' },
    { title: 'Asus ExpertBook B9', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '' },
    { title: 'Asus Chromebook Flip', price: 130000, priceDisplay: 'Rs. 130,000', stock: 'In Stock', img: '' },
    { title: 'Asus ProArt StudioBook', price: 410000, priceDisplay: 'Rs. 410,000', stock: 'In Stock', img: '' },
    { title: 'Asus ZenBook Duo', price: 360000, priceDisplay: 'Rs. 360,000', stock: 'In Stock', img: '' },
]; 