// Product data for the website
// This file contains all product arrays used across different pages

// Legacy products array (for backward compatibility)
const productsArray = [
  {
    id: 1,
    name: "HP EliteBook 840",
    price: "Rs. 250,000",
    desc: "Powerful business laptop with sleek design.",
    img: "https://via.placeholder.com/300x200?text=HP+EliteBook+840",
    specs: "Intel i5, 8GB RAM, 256GB SSD, 14'' FHD"
  },
  {
    id: 2,
    name: "Dell XPS 13",
    price: "Rs. 330,000",
    desc: "Ultra-portable, high-performance ultrabook.",
    img: "https://via.placeholder.com/300x200?text=Dell+XPS+13",
    specs: "Intel i7, 16GB RAM, 512GB SSD, 13.3'' FHD"
  },
  {
    id: 3,
    name: "Lenovo ThinkCentre",
    price: "Rs. 120,000",
    desc: "Reliable desktop for office and home.",
    img: "https://via.placeholder.com/300x200?text=Lenovo+ThinkCentre",
    specs: "Intel i5, 8GB RAM, 1TB HDD, Windows 10 Pro"
  },
  {
    id: 4,
    name: "Logitech Keyboard",
    price: "Rs. 8,500",
    desc: "Ergonomic keyboard for comfortable typing.",
    img: "https://via.placeholder.com/300x200?text=Logitech+Keyboard",
    specs: "Wireless, Full-size, 2-year battery life"
  },
  {
    id: 5,
    name: "HP Wireless Mouse",
    price: "Rs. 3,200",
    desc: "Smooth, precise, and wireless control.",
    img: "https://via.placeholder.com/300x200?text=HP+Wireless+Mouse",
    specs: "Wireless, 1600 DPI, 12-month battery"
  },
  {
    id: 6,
    name: "Asus ROG Zephyrus",
    price: "Rs. 370,000",
    desc: "High-end gaming laptop for enthusiasts.",
    img: "https://via.placeholder.com/300x200?text=Asus+ROG+Zephyrus",
    specs: "AMD Ryzen 9, 32GB RAM, 1TB SSD, RTX 3080"
  }
];

// Laptop products array
const laptopProducts = [
    // HP Laptops
    { title: 'HP EliteBook 840', price: 250000, priceDisplay: 'Rs. 250,000', stock: 'In Stock', img: '' },
    { title: 'HP Pavilion 15', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '' },
    { title: 'HP Spectre x360', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '' },
    { title: 'HP Envy 13', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'HP ProBook 450', price: 195000, priceDisplay: 'Rs. 195,000', stock: 'In Stock', img: '' },
    { title: 'HP Omen 16', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '' },
    { title: 'HP Chromebook 14', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '' },
    { title: 'HP ZBook Firefly', price: 400000, priceDisplay: 'Rs. 400,000', stock: 'In Stock', img: '' },
    
    // Dell Laptops
    { title: 'Dell Inspiron 15', price: 170000, priceDisplay: 'Rs. 170,000', stock: 'In Stock', img: '' },
    { title: 'Dell XPS 13', price: 330000, priceDisplay: 'Rs. 330,000', stock: 'In Stock', img: '' },
    { title: 'Dell Latitude 5420', price: 220000, priceDisplay: 'Rs. 220,000', stock: 'In Stock', img: '' },
    { title: 'Dell Vostro 3500', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '' },
    { title: 'Dell G5 15', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '' },
    { title: 'Dell Alienware m15', price: 450000, priceDisplay: 'Rs. 450,000', stock: 'In Stock', img: '' },
    { title: 'Dell Precision 5550', price: 390000, priceDisplay: 'Rs. 390,000', stock: 'In Stock', img: '' },
    { title: 'Dell XPS 17', price: 410000, priceDisplay: 'Rs. 410,000', stock: 'In Stock', img: '' },
    
    // ThinkPad Laptops
    { title: 'ThinkPad X1 Carbon', price: 340000, priceDisplay: 'Rs. 340,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad T14', price: 230000, priceDisplay: 'Rs. 230,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad L13 Yoga', price: 200000, priceDisplay: 'Rs. 200,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad E15', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad P15', price: 370000, priceDisplay: 'Rs. 370,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad X13', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad L14', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '' },
    { title: 'ThinkPad E14', price: 175000, priceDisplay: 'Rs. 175,000', stock: 'In Stock', img: '' },
    
    // Lenovo Laptops
    { title: 'Lenovo IdeaPad 3', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Legion 5', price: 260000, priceDisplay: 'Rs. 260,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Yoga Slim 7', price: 290000, priceDisplay: 'Rs. 290,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo ThinkBook 15', price: 185000, priceDisplay: 'Rs. 185,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo V14', price: 125000, priceDisplay: 'Rs. 125,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Flex 5', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Legion 7', price: 420000, priceDisplay: 'Rs. 420,000', stock: 'In Stock', img: '' },
    { title: 'Lenovo Yoga 9i', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '' },
    
    // Asus Laptops
    { title: 'Asus VivoBook 15', price: 155000, priceDisplay: 'Rs. 155,000', stock: 'In Stock', img: '' },
    { title: 'Asus ZenBook 14', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: '' },
    { title: 'Asus ROG Zephyrus G14', price: 370000, priceDisplay: 'Rs. 370,000', stock: 'In Stock', img: '' },
    { title: 'Asus TUF Gaming F15', price: 240000, priceDisplay: 'Rs. 240,000', stock: 'In Stock', img: '' },
    { title: 'Asus ExpertBook B9', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '' },
    { title: 'Asus Chromebook Flip', price: 130000, priceDisplay: 'Rs. 130,000', stock: 'In Stock', img: '' },
    { title: 'Asus ProArt StudioBook', price: 410000, priceDisplay: 'Rs. 410,000', stock: 'In Stock', img: '' },
    { title: 'Asus ZenBook Duo', price: 360000, priceDisplay: 'Rs. 360,000', stock: 'In Stock', img: '' }
];

// Desktop PC products array
const desktopPCProducts = [
    // HP Desktop PCs
    { title: 'HP Pavilion Desktop', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'HP EliteDesk 800', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'HP OMEN Gaming Desktop', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'HP Z2 Mini Workstation', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'HP ProDesk 600', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'HP Pavilion Gaming Desktop', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'HP EliteOne 800', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'HP Z8 G4 Workstation', price: 650000, priceDisplay: 'Rs. 650,000', stock: 'In Stock', img: '', category: 'Workstation' },
    
    // Dell Desktop PCs
    { title: 'Dell Inspiron Desktop', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Dell OptiPlex 7090', price: 110000, priceDisplay: 'Rs. 110,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Dell Alienware Aurora', price: 420000, priceDisplay: 'Rs. 420,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Dell Precision 3650', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Dell Vostro Desktop', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Dell XPS Desktop', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Dell Precision 5820', price: 450000, priceDisplay: 'Rs. 450,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Dell G5 Gaming Desktop', price: 220000, priceDisplay: 'Rs. 220,000', stock: 'In Stock', img: '', category: 'Gaming' },
    
    // Lenovo Desktop PCs
    { title: 'Lenovo IdeaCentre Desktop', price: 70000, priceDisplay: 'Rs. 70,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Lenovo ThinkCentre M90', price: 100000, priceDisplay: 'Rs. 100,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Lenovo Legion Gaming Desktop', price: 250000, priceDisplay: 'Rs. 250,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Lenovo ThinkStation P350', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Lenovo V530 Desktop', price: 80000, priceDisplay: 'Rs. 80,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Lenovo ThinkCentre M80', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Lenovo Legion 5 Desktop', price: 200000, priceDisplay: 'Rs. 200,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Lenovo ThinkStation P360', price: 380000, priceDisplay: 'Rs. 380,000', stock: 'In Stock', img: '', category: 'Workstation' },
    
    // Asus Desktop PCs
    { title: 'Asus VivoPC Desktop', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Asus ProArt Station', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Asus ROG Strix Gaming', price: 300000, priceDisplay: 'Rs. 300,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Asus ExpertCenter', price: 90000, priceDisplay: 'Rs. 90,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Asus Zen AiO Desktop', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', category: 'Home' },
    { title: 'Asus ROG Gaming Desktop', price: 350000, priceDisplay: 'Rs. 350,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Asus ProArt Station D9', price: 420000, priceDisplay: 'Rs. 420,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Asus VivoMini Desktop', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', category: 'Home' },
    
    // Custom Built PCs
    { title: 'Custom Gaming PC RTX 4070', price: 450000, priceDisplay: 'Rs. 450,000', stock: 'In Stock', img: '', category: 'Gaming' },
    { title: 'Custom Workstation PC', price: 380000, priceDisplay: 'Rs. 380,000', stock: 'In Stock', img: '', category: 'Workstation' },
    { title: 'Custom Office PC', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', category: 'Business' },
    { title: 'Custom Home PC', price: 70000, priceDisplay: 'Rs. 70,000', stock: 'In Stock', img: '', category: 'Home' }
];

// Monitor products array
const monitorProducts = [
    // Samsung Monitors
    { title: 'Samsung 24" FHD Monitor', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Samsung' },
    { title: 'Samsung 27" QHD Gaming Monitor', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', type: 'Gaming', size: '27', brand: 'Samsung' },
    { title: 'Samsung 32" 4K Monitor', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'Samsung' },
    { title: 'Samsung 34" Ultrawide Curved', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', type: 'Curved', size: '34', brand: 'Samsung' },
    { title: 'Samsung 49" Super Ultrawide', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '49', brand: 'Samsung' },
    { title: 'Samsung 24" Business Monitor', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Samsung' },
    
    // LG Monitors
    { title: 'LG 24" FHD Monitor', price: 23000, priceDisplay: 'Rs. 23,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'LG' },
    { title: 'LG 27" 4K Monitor', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', type: 'Professional', size: '27', brand: 'LG' },
    { title: 'LG 34" Ultrawide Curved', price: 88000, priceDisplay: 'Rs. 88,000', stock: 'In Stock', img: '', type: 'Curved', size: '34', brand: 'LG' },
    { title: 'LG 32" Gaming Monitor', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', type: 'Gaming', size: '32', brand: 'LG' },
    { title: 'LG 27" QHD Monitor', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'In Stock', img: '', type: 'Business', size: '27', brand: 'LG' },
    { title: 'LG 49" Ultrawide Gaming', price: 135000, priceDisplay: 'Rs. 135,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '49', brand: 'LG' },
    
    // Dell Monitors
    { title: 'Dell 24" Business Monitor', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Dell' },
    { title: 'Dell 27" Professional Monitor', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', type: 'Professional', size: '27', brand: 'Dell' },
    { title: 'Dell 32" 4K Monitor', price: 92000, priceDisplay: 'Rs. 92,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'Dell' },
    { title: 'Dell 34" Ultrawide Monitor', price: 78000, priceDisplay: 'Rs. 78,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '34', brand: 'Dell' },
    { title: 'Dell 27" Gaming Monitor', price: 48000, priceDisplay: 'Rs. 48,000', stock: 'In Stock', img: '', type: 'Gaming', size: '27', brand: 'Dell' },
    { title: 'Dell 24" FHD Monitor', price: 26000, priceDisplay: 'Rs. 26,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Dell' },
    
    // HP Monitors
    { title: 'HP 24" Business Monitor', price: 24000, priceDisplay: 'Rs. 24,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'HP' },
    { title: 'HP 27" QHD Monitor', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', type: 'Business', size: '27', brand: 'HP' },
    { title: 'HP 32" 4K Monitor', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'HP' },
    { title: 'HP 27" Gaming Monitor', price: 52000, priceDisplay: 'Rs. 52,000', stock: 'In Stock', img: '', type: 'Gaming', size: '27', brand: 'HP' },
    { title: 'HP 24" FHD Monitor', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'HP' },
    { title: 'HP 34" Ultrawide Monitor', price: 82000, priceDisplay: 'Rs. 82,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '34', brand: 'HP' },
    
    // Asus Monitors
    { title: 'Asus 24" Gaming Monitor', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'Gaming', size: '24', brand: 'Asus' },
    { title: 'Asus 27" ROG Gaming Monitor', price: 68000, priceDisplay: 'Rs. 68,000', stock: 'In Stock', img: '', type: 'Gaming', size: '27', brand: 'Asus' },
    { title: 'Asus 32" 4K Monitor', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'Asus' },
    { title: 'Asus 34" Ultrawide Gaming', price: 98000, priceDisplay: 'Rs. 98,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '34', brand: 'Asus' },
    { title: 'Asus 27" ProArt Monitor', price: 72000, priceDisplay: 'Rs. 72,000', stock: 'In Stock', img: '', type: 'Professional', size: '27', brand: 'Asus' },
    { title: 'Asus 24" Business Monitor', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Asus' },
    
    // Acer Monitors
    { title: 'Acer 24" Gaming Monitor', price: 32000, priceDisplay: 'Rs. 32,000', stock: 'In Stock', img: '', type: 'Gaming', size: '24', brand: 'Acer' },
    { title: 'Acer 27" Predator Gaming', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', type: 'Gaming', size: '27', brand: 'Acer' },
    { title: 'Acer 32" 4K Monitor', price: 88000, priceDisplay: 'Rs. 88,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'Acer' },
    { title: 'Acer 24" Business Monitor', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', type: 'Business', size: '24', brand: 'Acer' },
    { title: 'Acer 27" QHD Monitor', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'In Stock', img: '', type: 'Business', size: '27', brand: 'Acer' },
    { title: 'Acer 34" Ultrawide Monitor', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', type: 'Ultrawide', size: '34', brand: 'Acer' },
    
    // BenQ Monitors
    { title: 'BenQ 24" Gaming Monitor', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', type: 'Gaming', size: '24', brand: 'BenQ' },
    { title: 'BenQ 27" Professional Monitor', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', type: 'Professional', size: '27', brand: 'BenQ' },
    { title: 'BenQ 32" 4K Monitor', price: 92000, priceDisplay: 'Rs. 92,000', stock: 'In Stock', img: '', type: 'Professional', size: '32', brand: 'BenQ' }
];

// Headphones products array
const headphonesProducts = [
    // Sony Headphones
    { title: 'Sony WH-1000XM4 Wireless', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Sony' },
    { title: 'Sony WH-1000XM5 Wireless', price: 52000, priceDisplay: 'Rs. 52,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Sony' },
    { title: 'Sony WF-1000XM4 Earbuds', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Sony' },
    { title: 'Sony MDR-7506 Professional', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Microphone'], brand: 'Sony' },
    
    // Bose Headphones
    { title: 'Bose QuietComfort 45', price: 48000, priceDisplay: 'Rs. 48,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Bose' },
    { title: 'Bose QuietComfort Earbuds', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Bose' },
    { title: 'Bose SoundLink Around-Ear', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Bluetooth'], brand: 'Bose' },
    
    // Sennheiser Headphones
    { title: 'Sennheiser HD 660S', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: [], brand: 'Sennheiser' },
    { title: 'Sennheiser Momentum 3 Wireless', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Sennheiser' },
    { title: 'Sennheiser HD 280 Pro', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Microphone'], brand: 'Sennheiser' },
    
    // Audio-Technica Headphones
    { title: 'Audio-Technica ATH-M50x', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Microphone'], brand: 'Audio-Technica' },
    { title: 'Audio-Technica ATH-M40x', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Microphone'], brand: 'Audio-Technica' },
    { title: 'Audio-Technica ATH-SR50BT', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'On-Ear', features: ['Bluetooth'], brand: 'Audio-Technica' },
    
    // JBL Headphones
    { title: 'JBL Live 650BTNC', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'JBL' },
    { title: 'JBL Tune 750BTNC', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', type: 'On-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'JBL' },
    { title: 'JBL Endurance Run', price: 3000, priceDisplay: 'Rs. 3,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Water Resistant'], brand: 'JBL' },
    
    // Beats Headphones
    { title: 'Beats Studio3 Wireless', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'Over-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Beats' },
    { title: 'Beats Solo3 Wireless', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'On-Ear', features: ['Bluetooth'], brand: 'Beats' },
    { title: 'Beats Powerbeats Pro', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Bluetooth', 'Water Resistant'], brand: 'Beats' },
    
    // Gaming Headphones
    { title: 'Logitech G Pro X Gaming', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Gaming', features: ['Microphone'], brand: 'Logitech' },
    { title: 'Razer BlackShark V2 Pro', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Gaming', features: ['Bluetooth', 'Microphone'], brand: 'Razer' },
    { title: 'SteelSeries Arctis 7 Gaming', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', type: 'Gaming', features: ['Bluetooth', 'Microphone'], brand: 'SteelSeries' },
    { title: 'HyperX Cloud II Gaming', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', type: 'Gaming', features: ['Microphone'], brand: 'HyperX' },
    
    // Wireless Earbuds
    { title: 'Samsung Galaxy Buds Pro', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Samsung' },
    { title: 'Apple AirPods Pro', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Apple' },
    { title: 'Jabra Elite 85t', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', type: 'In-Ear', features: ['Noise Cancelling', 'Bluetooth'], brand: 'Jabra' }
];

// Mouse products array
const mouseProducts = [
    // Logitech Mice
    { title: 'Logitech G Pro X Superlight', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '25600', brand: 'Logitech' },
    { title: 'Logitech MX Master 3', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', type: 'Wireless', dpi: '4000', brand: 'Logitech' },
    { title: 'Logitech G502 HERO', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '25600', brand: 'Logitech' },
    { title: 'Logitech M720 Triathlon', price: 5000, priceDisplay: 'Rs. 5,000', stock: 'In Stock', img: '', type: 'Wireless', dpi: '1000', brand: 'Logitech' },
    
    // Razer Mice
    { title: 'Razer DeathAdder V3 Pro', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '30000', brand: 'Razer' },
    { title: 'Razer Basilisk V3', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '26000', brand: 'Razer' },
    { title: 'Razer Viper Ultimate', price: 16000, priceDisplay: 'Rs. 16,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '20000', brand: 'Razer' },
    
    // SteelSeries Mice
    { title: 'SteelSeries Rival 600', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '12000', brand: 'SteelSeries' },
    { title: 'SteelSeries Prime Wireless', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '18000', brand: 'SteelSeries' },
    
    // Corsair Mice
    { title: 'Corsair M65 RGB Elite', price: 11000, priceDisplay: 'Rs. 11,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '18000', brand: 'Corsair' },
    { title: 'Corsair Dark Core RGB Pro', price: 13000, priceDisplay: 'Rs. 13,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '18000', brand: 'Corsair' },
    
    // HP Mice
    { title: 'HP Wireless Mouse', price: 2000, priceDisplay: 'Rs. 2,000', stock: 'In Stock', img: '', type: 'Wireless', dpi: '1200', brand: 'HP' },
    { title: 'HP USB Mouse', price: 1500, priceDisplay: 'Rs. 1,500', stock: 'In Stock', img: '', type: 'Wired', dpi: '1000', brand: 'HP' },
    
    // Dell Mice
    { title: 'Dell Wireless Mouse', price: 2500, priceDisplay: 'Rs. 2,500', stock: 'In Stock', img: '', type: 'Wireless', dpi: '1200', brand: 'Dell' },
    { title: 'Dell USB Mouse', price: 1800, priceDisplay: 'Rs. 1,800', stock: 'In Stock', img: '', type: 'Wired', dpi: '1000', brand: 'Dell' },
    
    // Budget Gaming Mice
    { title: 'Redragon M711 Gaming', price: 4000, priceDisplay: 'Rs. 4,000', stock: 'In Stock', img: '', type: 'Gaming', dpi: '10000', brand: 'Redragon' },
    { title: 'A4Tech Bloody Gaming', price: 3500, priceDisplay: 'Rs. 3,500', stock: 'In Stock', img: '', type: 'Gaming', dpi: '8000', brand: 'A4Tech' }
];

// Graphics Card products array
const graphicsCardProducts = [
    // NVIDIA RTX 40 Series
    { title: 'NVIDIA RTX 4090', price: 450000, priceDisplay: 'Rs. 450,000', stock: 'In Stock', img: '', memory: '24GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 4080', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 4070 Ti', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 4070', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 4060 Ti', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 4060', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'NVIDIA' },
    
    // NVIDIA RTX 30 Series
    { title: 'NVIDIA RTX 3090', price: 320000, priceDisplay: 'Rs. 320,000', stock: 'In Stock', img: '', memory: '24GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3080 Ti', price: 220000, priceDisplay: 'Rs. 220,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3080', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', memory: '10GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3070 Ti', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3070', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3060 Ti', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'NVIDIA' },
    { title: 'NVIDIA RTX 3060', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'NVIDIA' },
    
    // AMD RX 7000 Series
    { title: 'AMD RX 7900 XTX', price: 280000, priceDisplay: 'Rs. 280,000', stock: 'In Stock', img: '', memory: '24GB', brand: 'AMD' },
    { title: 'AMD RX 7900 XT', price: 220000, priceDisplay: 'Rs. 220,000', stock: 'In Stock', img: '', memory: '20GB', brand: 'AMD' },
    { title: 'AMD RX 7800 XT', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'AMD' },
    { title: 'AMD RX 7700 XT', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'AMD' },
    { title: 'AMD RX 7600', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'AMD' },
    
    // AMD RX 6000 Series
    { title: 'AMD RX 6950 XT', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'AMD' },
    { title: 'AMD RX 6900 XT', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'AMD' },
    { title: 'AMD RX 6800 XT', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'AMD' },
    { title: 'AMD RX 6800', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', memory: '16GB', brand: 'AMD' },
    { title: 'AMD RX 6750 XT', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'AMD' },
    { title: 'AMD RX 6700 XT', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', memory: '12GB', brand: 'AMD' },
    { title: 'AMD RX 6650 XT', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'AMD' },
    { title: 'AMD RX 6600 XT', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'AMD' },
    { title: 'AMD RX 6600', price: 32000, priceDisplay: 'Rs. 32,000', stock: 'In Stock', img: '', memory: '8GB', brand: 'AMD' }
];

// Motherboard products array
const motherboardProducts = [
    // Intel Motherboards
    { title: 'ASUS ROG Maximus Z790 Hero', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'Z790', brand: 'ASUS' },
    { title: 'MSI MPG Z790 Gaming Edge', price: 72000, priceDisplay: 'Rs. 72,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'Z790', brand: 'MSI' },
    { title: 'Gigabyte Z790 Aorus Elite', price: 68000, priceDisplay: 'Rs. 68,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'Z790', brand: 'Gigabyte' },
    { title: 'ASRock Z790 Pro RS', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'Z790', brand: 'ASRock' },
    
    // AMD Motherboards
    { title: 'ASUS ROG Crosshair X670E Hero', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'X670E', brand: 'ASUS' },
    { title: 'MSI MPG X670E Carbon', price: 82000, priceDisplay: 'Rs. 82,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'X670E', brand: 'MSI' },
    { title: 'Gigabyte X670E Aorus Master', price: 88000, priceDisplay: 'Rs. 88,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'X670E', brand: 'Gigabyte' },
    { title: 'ASRock X670E Pro RS', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'X670E', brand: 'ASRock' },
    
    // Budget Intel Motherboards
    { title: 'ASUS Prime B760M-A', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'B760', brand: 'ASUS' },
    { title: 'MSI Pro B760M-P', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'B760', brand: 'MSI' },
    { title: 'Gigabyte B760M DS3H', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', socket: 'LGA 1700', chipset: 'B760', brand: 'Gigabyte' },
    
    // Budget AMD Motherboards
    { title: 'ASUS Prime B650M-A', price: 32000, priceDisplay: 'Rs. 32,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'B650', brand: 'ASUS' },
    { title: 'MSI Pro B650M-A', price: 29000, priceDisplay: 'Rs. 29,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'B650', brand: 'MSI' },
    { title: 'Gigabyte B650M DS3H', price: 26000, priceDisplay: 'Rs. 26,000', stock: 'In Stock', img: '', socket: 'AM5', chipset: 'B650', brand: 'Gigabyte' }
];

// Memory products array
const laptopMemoryProducts = [
    // DDR4 Laptop Memory
    { title: 'Kingston 8GB DDR4 3200MHz', price: 3500, priceDisplay: 'Rs. 3,500', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'Kingston' },
    { title: 'Kingston 16GB DDR4 3200MHz', price: 6500, priceDisplay: 'Rs. 6,500', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'Kingston' },
    { title: 'Crucial 8GB DDR4 3200MHz', price: 3200, priceDisplay: 'Rs. 3,200', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'Crucial' },
    { title: 'Crucial 16GB DDR4 3200MHz', price: 6000, priceDisplay: 'Rs. 6,000', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'Crucial' },
    { title: 'Corsair 8GB DDR4 3200MHz', price: 3800, priceDisplay: 'Rs. 3,800', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'Corsair' },
    { title: 'Corsair 16GB DDR4 3200MHz', price: 6800, priceDisplay: 'Rs. 6,800', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'Corsair' },
    
    // DDR5 Laptop Memory
    { title: 'Kingston 16GB DDR5 4800MHz', price: 8500, priceDisplay: 'Rs. 8,500', stock: 'In Stock', img: '', capacity: '16GB', speed: '4800MHz', type: 'DDR5', brand: 'Kingston' },
    { title: 'Kingston 32GB DDR5 4800MHz', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', capacity: '32GB', speed: '4800MHz', type: 'DDR5', brand: 'Kingston' },
    { title: 'Crucial 16GB DDR5 4800MHz', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', capacity: '16GB', speed: '4800MHz', type: 'DDR5', brand: 'Crucial' },
    { title: 'Crucial 32GB DDR5 4800MHz', price: 14500, priceDisplay: 'Rs. 14,500', stock: 'In Stock', img: '', capacity: '32GB', speed: '4800MHz', type: 'DDR5', brand: 'Crucial' }
];

const desktopMemoryProducts = [
    // DDR4 Desktop Memory
    { title: 'Kingston 8GB DDR4 3200MHz', price: 3000, priceDisplay: 'Rs. 3,000', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'Kingston' },
    { title: 'Kingston 16GB DDR4 3200MHz', price: 5500, priceDisplay: 'Rs. 5,500', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'Kingston' },
    { title: 'Kingston 32GB DDR4 3200MHz', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', capacity: '32GB', speed: '3200MHz', type: 'DDR4', brand: 'Kingston' },
    { title: 'Corsair 8GB DDR4 3200MHz', price: 3200, priceDisplay: 'Rs. 3,200', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'Corsair' },
    { title: 'Corsair 16GB DDR4 3200MHz', price: 5800, priceDisplay: 'Rs. 5,800', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'Corsair' },
    { title: 'Corsair 32GB DDR4 3200MHz', price: 10500, priceDisplay: 'Rs. 10,500', stock: 'In Stock', img: '', capacity: '32GB', speed: '3200MHz', type: 'DDR4', brand: 'Corsair' },
    { title: 'G.Skill 8GB DDR4 3200MHz', price: 3100, priceDisplay: 'Rs. 3,100', stock: 'In Stock', img: '', capacity: '8GB', speed: '3200MHz', type: 'DDR4', brand: 'G.Skill' },
    { title: 'G.Skill 16GB DDR4 3200MHz', price: 5600, priceDisplay: 'Rs. 5,600', stock: 'In Stock', img: '', capacity: '16GB', speed: '3200MHz', type: 'DDR4', brand: 'G.Skill' },
    { title: 'G.Skill 32GB DDR4 3200MHz', price: 10200, priceDisplay: 'Rs. 10,200', stock: 'In Stock', img: '', capacity: '32GB', speed: '3200MHz', type: 'DDR4', brand: 'G.Skill' },
    
    // DDR5 Desktop Memory
    { title: 'Kingston 16GB DDR5 4800MHz', price: 7500, priceDisplay: 'Rs. 7,500', stock: 'In Stock', img: '', capacity: '16GB', speed: '4800MHz', type: 'DDR5', brand: 'Kingston' },
    { title: 'Kingston 32GB DDR5 4800MHz', price: 13500, priceDisplay: 'Rs. 13,500', stock: 'In Stock', img: '', capacity: '32GB', speed: '4800MHz', type: 'DDR5', brand: 'Kingston' },
    { title: 'Corsair 16GB DDR5 4800MHz', price: 7800, priceDisplay: 'Rs. 7,800', stock: 'In Stock', img: '', capacity: '16GB', speed: '4800MHz', type: 'DDR5', brand: 'Corsair' },
    { title: 'Corsair 32GB DDR5 4800MHz', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', capacity: '32GB', speed: '4800MHz', type: 'DDR5', brand: 'Corsair' },
    { title: 'G.Skill 16GB DDR5 4800MHz', price: 7200, priceDisplay: 'Rs. 7,200', stock: 'In Stock', img: '', capacity: '16GB', speed: '4800MHz', type: 'DDR5', brand: 'G.Skill' },
    { title: 'G.Skill 32GB DDR5 4800MHz', price: 13000, priceDisplay: 'Rs. 13,000', stock: 'In Stock', img: '', capacity: '32GB', speed: '4800MHz', type: 'DDR5', brand: 'G.Skill' }
];

// Storage Drive products array
const driveProducts = [
    // SSD Drives
    { title: 'Samsung 970 EVO Plus 500GB', price: 8500, priceDisplay: 'Rs. 8,500', stock: 'In Stock', img: '', capacity: '500GB', type: 'SSD', interface: 'NVMe', brand: 'Samsung' },
    { title: 'Samsung 970 EVO Plus 1TB', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', capacity: '1TB', type: 'SSD', interface: 'NVMe', brand: 'Samsung' },
    { title: 'Samsung 970 EVO Plus 2TB', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', capacity: '2TB', type: 'SSD', interface: 'NVMe', brand: 'Samsung' },
    { title: 'WD Black SN850 500GB', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', capacity: '500GB', type: 'SSD', interface: 'NVMe', brand: 'Western Digital' },
    { title: 'WD Black SN850 1TB', price: 16000, priceDisplay: 'Rs. 16,000', stock: 'In Stock', img: '', capacity: '1TB', type: 'SSD', interface: 'NVMe', brand: 'Western Digital' },
    { title: 'WD Black SN850 2TB', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', img: '', capacity: '2TB', type: 'SSD', interface: 'NVMe', brand: 'Western Digital' },
    { title: 'Crucial P5 500GB', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', capacity: '500GB', type: 'SSD', interface: 'NVMe', brand: 'Crucial' },
    { title: 'Crucial P5 1TB', price: 14500, priceDisplay: 'Rs. 14,500', stock: 'In Stock', img: '', capacity: '1TB', type: 'SSD', interface: 'NVMe', brand: 'Crucial' },
    { title: 'Crucial P5 2TB', price: 27000, priceDisplay: 'Rs. 27,000', stock: 'In Stock', img: '', capacity: '2TB', type: 'SSD', interface: 'NVMe', brand: 'Crucial' },
    
    // SATA SSD Drives
    { title: 'Samsung 870 EVO 500GB', price: 6500, priceDisplay: 'Rs. 6,500', stock: 'In Stock', img: '', capacity: '500GB', type: 'SSD', interface: 'SATA', brand: 'Samsung' },
    { title: 'Samsung 870 EVO 1TB', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', capacity: '1TB', type: 'SSD', interface: 'SATA', brand: 'Samsung' },
    { title: 'Samsung 870 EVO 2TB', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', capacity: '2TB', type: 'SSD', interface: 'SATA', brand: 'Samsung' },
    { title: 'Crucial MX500 500GB', price: 6000, priceDisplay: 'Rs. 6,000', stock: 'In Stock', img: '', capacity: '500GB', type: 'SSD', interface: 'SATA', brand: 'Crucial' },
    { title: 'Crucial MX500 1TB', price: 11000, priceDisplay: 'Rs. 11,000', stock: 'In Stock', img: '', capacity: '1TB', type: 'SSD', interface: 'SATA', brand: 'Crucial' },
    { title: 'Crucial MX500 2TB', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', capacity: '2TB', type: 'SSD', interface: 'SATA', brand: 'Crucial' },
    
    // HDD Drives
    { title: 'WD Blue 1TB HDD', price: 3500, priceDisplay: 'Rs. 3,500', stock: 'In Stock', img: '', capacity: '1TB', type: 'HDD', interface: 'SATA', brand: 'Western Digital' },
    { title: 'WD Blue 2TB HDD', price: 5500, priceDisplay: 'Rs. 5,500', stock: 'In Stock', img: '', capacity: '2TB', type: 'HDD', interface: 'SATA', brand: 'Western Digital' },
    { title: 'WD Blue 4TB HDD', price: 9500, priceDisplay: 'Rs. 9,500', stock: 'In Stock', img: '', capacity: '4TB', type: 'HDD', interface: 'SATA', brand: 'Western Digital' },
    { title: 'Seagate Barracuda 1TB', price: 3200, priceDisplay: 'Rs. 3,200', stock: 'In Stock', img: '', capacity: '1TB', type: 'HDD', interface: 'SATA', brand: 'Seagate' },
    { title: 'Seagate Barracuda 2TB', price: 5200, priceDisplay: 'Rs. 5,200', stock: 'In Stock', img: '', capacity: '2TB', type: 'HDD', interface: 'SATA', brand: 'Seagate' },
    { title: 'Seagate Barracuda 4TB', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', capacity: '4TB', type: 'HDD', interface: 'SATA', brand: 'Seagate' }
];

// PC Case products array
const pcCasingProducts = [
    // Full Tower Cases
    { title: 'NZXT H710i Full Tower', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', size: 'Full Tower', brand: 'NZXT' },
    { title: 'Phanteks Enthoo 719', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', size: 'Full Tower', brand: 'Phanteks' },
    { title: 'Corsair Obsidian 1000D', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', size: 'Full Tower', brand: 'Corsair' },
    
    // Mid Tower Cases
    { title: 'NZXT H510 Mid Tower', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'NZXT' },
    { title: 'Phanteks P400A Mid Tower', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'Phanteks' },
    { title: 'Corsair 4000D Mid Tower', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'Corsair' },
    { title: 'Lian Li O11 Dynamic', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'Lian Li' },
    { title: 'Fractal Design Meshify C', price: 16000, priceDisplay: 'Rs. 16,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'Fractal Design' },
    
    // Mini ITX Cases
    { title: 'NZXT H210i Mini ITX', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', size: 'Mini ITX', brand: 'NZXT' },
    { title: 'Phanteks Evolv Shift', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', size: 'Mini ITX', brand: 'Phanteks' },
    { title: 'Lian Li Q58 Mini ITX', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', size: 'Mini ITX', brand: 'Lian Li' },
    
    // Budget Cases
    { title: 'Cooler Master MasterBox Q300L', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', size: 'Micro ATX', brand: 'Cooler Master' },
    { title: 'DeepCool Matrexx 55', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', size: 'Mid Tower', brand: 'DeepCool' },
    { title: 'Antec NX200M', price: 7000, priceDisplay: 'Rs. 7,000', stock: 'In Stock', img: '', size: 'Micro ATX', brand: 'Antec' }
];

// Power Supply products array
const powerSupplyProducts = [
    // High Wattage PSUs
    { title: 'Corsair AX1600i 1600W', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', wattage: '1600W', efficiency: '80+ Titanium', brand: 'Corsair' },
    { title: 'Seasonic PRIME TX-1600', price: 90000, priceDisplay: 'Rs. 90,000', stock: 'In Stock', img: '', wattage: '1600W', efficiency: '80+ Titanium', brand: 'Seasonic' },
    { title: 'EVGA SuperNOVA 1600 T2', price: 80000, priceDisplay: 'Rs. 80,000', stock: 'In Stock', img: '', wattage: '1600W', efficiency: '80+ Titanium', brand: 'EVGA' },
    
    // 1000W+ PSUs
    { title: 'Corsair HX1000i 1000W', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', wattage: '1000W', efficiency: '80+ Platinum', brand: 'Corsair' },
    { title: 'Seasonic PRIME GX-1000', price: 48000, priceDisplay: 'Rs. 48,000', stock: 'In Stock', img: '', wattage: '1000W', efficiency: '80+ Gold', brand: 'Seasonic' },
    { title: 'EVGA SuperNOVA 1000 G6', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'In Stock', img: '', wattage: '1000W', efficiency: '80+ Gold', brand: 'EVGA' },
    
    // 750W-850W PSUs
    { title: 'Corsair RM850x 850W', price: 32000, priceDisplay: 'Rs. 32,000', stock: 'In Stock', img: '', wattage: '850W', efficiency: '80+ Gold', brand: 'Corsair' },
    { title: 'Seasonic Focus GX-850', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', wattage: '850W', efficiency: '80+ Gold', brand: 'Seasonic' },
    { title: 'EVGA SuperNOVA 850 G5', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', img: '', wattage: '850W', efficiency: '80+ Gold', brand: 'EVGA' },
    { title: 'Corsair RM750x 750W', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', wattage: '750W', efficiency: '80+ Gold', brand: 'Corsair' },
    { title: 'Seasonic Focus GX-750', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', img: '', wattage: '750W', efficiency: '80+ Gold', brand: 'Seasonic' },
    
    // 550W-650W PSUs
    { title: 'Corsair RM650x 650W', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', wattage: '650W', efficiency: '80+ Gold', brand: 'Corsair' },
    { title: 'Seasonic Focus GX-650', price: 24000, priceDisplay: 'Rs. 24,000', stock: 'In Stock', img: '', wattage: '650W', efficiency: '80+ Gold', brand: 'Seasonic' },
    { title: 'EVGA SuperNOVA 650 G5', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', wattage: '650W', efficiency: '80+ Gold', brand: 'EVGA' },
    { title: 'Corsair RM550x 550W', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', wattage: '550W', efficiency: '80+ Gold', brand: 'Corsair' },
    { title: 'Seasonic Focus GX-550', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', wattage: '550W', efficiency: '80+ Gold', brand: 'Seasonic' },
    
    // Budget PSUs
    { title: 'Corsair CV550 550W', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', wattage: '550W', efficiency: '80+ Bronze', brand: 'Corsair' },
    { title: 'EVGA BR 500W', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', wattage: '500W', efficiency: '80+ Bronze', brand: 'EVGA' },
    { title: 'Cooler Master MWE 550W', price: 11000, priceDisplay: 'Rs. 11,000', stock: 'In Stock', img: '', wattage: '550W', efficiency: '80+ Bronze', brand: 'Cooler Master' }
];

// Scanner products array
const scannerProducts = [
    // Flatbed Scanners
    { title: 'Epson Perfection V39', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', type: 'Flatbed', resolution: '4800 DPI', brand: 'Epson' },
    { title: 'Canon CanoScan LiDE 400', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', type: 'Flatbed', resolution: '4800 DPI', brand: 'Canon' },
    { title: 'HP ScanJet Pro 2500', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Flatbed', resolution: '2400 DPI', brand: 'HP' },
    
    // Document Scanners
    { title: 'Fujitsu ScanSnap iX1500', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', type: 'Document', resolution: '600 DPI', brand: 'Fujitsu' },
    { title: 'Brother ADS-1700W', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'Document', resolution: '600 DPI', brand: 'Brother' },
    { title: 'Epson WorkForce DS-30', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Document', resolution: '600 DPI', brand: 'Epson' },
    
    // Photo Scanners
    { title: 'Epson Perfection V600', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', type: 'Photo', resolution: '6400 DPI', brand: 'Epson' },
    { title: 'Canon CanoScan 9000F', price: 32000, priceDisplay: 'Rs. 32,000', stock: 'In Stock', img: '', type: 'Photo', resolution: '9600 DPI', brand: 'Canon' },
    
    // Portable Scanners
    { title: 'Brother DS-640', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Portable', resolution: '600 DPI', brand: 'Brother' },
    { title: 'Epson WorkForce ES-50', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', type: 'Portable', resolution: '600 DPI', brand: 'Epson' }
];

// TV Box products array
const tvBoxProducts = [
    // Android TV Boxes
    { title: 'NVIDIA Shield TV Pro', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', type: 'Android TV', storage: '16GB', brand: 'NVIDIA' },
    { title: 'Amazon Fire TV Stick 4K', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', type: 'Fire TV', storage: '8GB', brand: 'Amazon' },
    { title: 'Xiaomi Mi Box S', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', type: 'Android TV', storage: '8GB', brand: 'Xiaomi' },
    { title: 'Chromecast with Google TV', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', type: 'Chromecast', storage: '8GB', brand: 'Google' },
    
    // Streaming Devices
    { title: 'Apple TV 4K', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', type: 'Apple TV', storage: '32GB', brand: 'Apple' },
    { title: 'Roku Ultra', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', type: 'Roku', storage: '16GB', brand: 'Roku' },
    { title: 'Fire TV Cube', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', type: 'Fire TV', storage: '16GB', brand: 'Amazon' },
    
    // Budget Options
    { title: 'Generic Android TV Box', price: 5000, priceDisplay: 'Rs. 5,000', stock: 'In Stock', img: '', type: 'Android TV', storage: '8GB', brand: 'Generic' },
    { title: 'Fire TV Stick Lite', price: 6000, priceDisplay: 'Rs. 6,000', stock: 'In Stock', img: '', type: 'Fire TV', storage: '8GB', brand: 'Amazon' },
    { title: 'Chromecast 3rd Gen', price: 7000, priceDisplay: 'Rs. 7,000', stock: 'In Stock', img: '', type: 'Chromecast', storage: '2GB', brand: 'Google' }
];

// Toner Cartridge products array
const tonerProducts = [
    // HP Toner Cartridges
    { title: 'HP 26A Black Toner Cartridge', price: 2500, priceDisplay: 'Rs. 2,500', stock: 'In Stock', img: '', type: 'Black', yield: '2000 pages', brand: 'HP' },
    { title: 'HP 49A Black Toner Cartridge', price: 3000, priceDisplay: 'Rs. 3,000', stock: 'In Stock', img: '', type: 'Black', yield: '2500 pages', brand: 'HP' },
    { title: 'HP 26X Black Toner Cartridge', price: 4500, priceDisplay: 'Rs. 4,500', stock: 'In Stock', img: '', type: 'Black', yield: '4000 pages', brand: 'HP' },
    { title: 'HP 49X Black Toner Cartridge', price: 5500, priceDisplay: 'Rs. 5,500', stock: 'In Stock', img: '', type: 'Black', yield: '5000 pages', brand: 'HP' },
    
    // Canon Toner Cartridges
    { title: 'Canon 051 Black Toner Cartridge', price: 2800, priceDisplay: 'Rs. 2,800', stock: 'In Stock', img: '', type: 'Black', yield: '2200 pages', brand: 'Canon' },
    { title: 'Canon 052 Black Toner Cartridge', price: 3500, priceDisplay: 'Rs. 3,500', stock: 'In Stock', img: '', type: 'Black', yield: '2800 pages', brand: 'Canon' },
    { title: 'Canon 051H Black Toner Cartridge', price: 4800, priceDisplay: 'Rs. 4,800', stock: 'In Stock', img: '', type: 'Black', yield: '4000 pages', brand: 'Canon' },
    
    // Brother Toner Cartridges
    { title: 'Brother TN-660 Black Toner', price: 2200, priceDisplay: 'Rs. 2,200', stock: 'In Stock', img: '', type: 'Black', yield: '1800 pages', brand: 'Brother' },
    { title: 'Brother TN-760 Black Toner', price: 2800, priceDisplay: 'Rs. 2,800', stock: 'In Stock', img: '', type: 'Black', yield: '2400 pages', brand: 'Brother' },
    { title: 'Brother TN-850 Black Toner', price: 3800, priceDisplay: 'Rs. 3,800', stock: 'In Stock', img: '', type: 'Black', yield: '3200 pages', brand: 'Brother' },
    
    // Compatible Toner Cartridges
    { title: 'Compatible HP 26A Black Toner', price: 1200, priceDisplay: 'Rs. 1,200', stock: 'In Stock', img: '', type: 'Black', yield: '2000 pages', brand: 'Compatible' },
    { title: 'Compatible Canon 051 Black Toner', price: 1400, priceDisplay: 'Rs. 1,400', stock: 'In Stock', img: '', type: 'Black', yield: '2200 pages', brand: 'Compatible' },
    { title: 'Compatible Brother TN-660 Black Toner', price: 1100, priceDisplay: 'Rs. 1,100', stock: 'In Stock', img: '', type: 'Black', yield: '1800 pages', brand: 'Compatible' }
];

// UPS products array
const upsProducts = [
    // Online UPS Systems
    { title: 'APC Smart-UPS 1500VA', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', capacity: '1500VA', type: 'Online', brand: 'APC' },
    { title: 'CyberPower CP1500PFCLCD', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', img: '', capacity: '1500VA', type: 'Line Interactive', brand: 'CyberPower' },
    { title: 'Eaton 5P 1500VA', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'In Stock', img: '', capacity: '1500VA', type: 'Online', brand: 'Eaton' },
    
    // 1000VA UPS Systems
    { title: 'APC Back-UPS Pro 1000VA', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', capacity: '1000VA', type: 'Line Interactive', brand: 'APC' },
    { title: 'CyberPower CP1000PFCLCD', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', capacity: '1000VA', type: 'Line Interactive', brand: 'CyberPower' },
    { title: 'Eaton 5P 1000VA', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', img: '', capacity: '1000VA', type: 'Online', brand: 'Eaton' },
    
    // 600VA UPS Systems
    { title: 'APC Back-UPS 600VA', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', capacity: '600VA', type: 'Line Interactive', brand: 'APC' },
    { title: 'CyberPower CP600LCD', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', capacity: '600VA', type: 'Line Interactive', brand: 'CyberPower' },
    { title: 'Eaton 3S 600VA', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', capacity: '600VA', type: 'Line Interactive', brand: 'Eaton' },
    
    // Budget UPS Systems
    { title: 'Generic 600VA UPS', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', capacity: '600VA', type: 'Offline', brand: 'Generic' },
    { title: 'Generic 1000VA UPS', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', capacity: '1000VA', type: 'Offline', brand: 'Generic' },
    { title: 'Generic 1500VA UPS', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', capacity: '1500VA', type: 'Offline', brand: 'Generic' }
];

// Used Laptop products array
const usedLaptopProducts = [
    // Used HP Laptops
    { title: 'Used HP EliteBook 840 G3', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', condition: 'Good', year: '2018', brand: 'HP' },
    { title: 'Used HP Pavilion 15', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'HP' },
    { title: 'Used HP ProBook 450 G5', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'HP' },
    { title: 'Used HP Envy 13', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'HP' },
    
    // Used Dell Laptops
    { title: 'Used Dell Latitude 5420', price: 80000, priceDisplay: 'Rs. 80,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Dell' },
    { title: 'Used Dell Inspiron 15', price: 60000, priceDisplay: 'Rs. 60,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Dell' },
    { title: 'Used Dell XPS 13', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Dell' },
    { title: 'Used Dell Vostro 3500', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Dell' },
    
    // Used ThinkPad Laptops
    { title: 'Used ThinkPad T14', price: 90000, priceDisplay: 'Rs. 90,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'ThinkPad' },
    { title: 'Used ThinkPad X1 Carbon', price: 110000, priceDisplay: 'Rs. 110,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'ThinkPad' },
    { title: 'Used ThinkPad E15', price: 70000, priceDisplay: 'Rs. 70,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'ThinkPad' },
    { title: 'Used ThinkPad L13 Yoga', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'ThinkPad' },
    
    // Used Lenovo Laptops
    { title: 'Used Lenovo IdeaPad 3', price: 50000, priceDisplay: 'Rs. 50,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Lenovo' },
    { title: 'Used Lenovo Legion 5', price: 100000, priceDisplay: 'Rs. 100,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Lenovo' },
    { title: 'Used Lenovo Yoga Slim 7', price: 95000, priceDisplay: 'Rs. 95,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Lenovo' },
    { title: 'Used Lenovo ThinkBook 15', price: 75000, priceDisplay: 'Rs. 75,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Lenovo' },
    
    // Used Asus Laptops
    { title: 'Used Asus VivoBook 15', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Asus' },
    { title: 'Used Asus ZenBook 14', price: 85000, priceDisplay: 'Rs. 85,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'Asus' },
    { title: 'Used Asus ROG Zephyrus G14', price: 130000, priceDisplay: 'Rs. 130,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Asus' },
    { title: 'Used Asus TUF Gaming F15', price: 90000, priceDisplay: 'Rs. 90,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Asus' }
];

// Used Desktop PC products array
const usedDesktopProducts = [
    // Used HP Desktop PCs
    { title: 'Used HP Pavilion Desktop', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'HP' },
    { title: 'Used HP EliteDesk 800', price: 65000, priceDisplay: 'Rs. 65,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'HP' },
    { title: 'Used HP OMEN Gaming Desktop', price: 150000, priceDisplay: 'Rs. 150,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'HP' },
    { title: 'Used HP ProDesk 600', price: 55000, priceDisplay: 'Rs. 55,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'HP' },
    
    // Used Dell Desktop PCs
    { title: 'Used Dell Inspiron Desktop', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Dell' },
    { title: 'Used Dell OptiPlex 7090', price: 70000, priceDisplay: 'Rs. 70,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Dell' },
    { title: 'Used Dell Alienware Aurora', price: 200000, priceDisplay: 'Rs. 200,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Dell' },
    { title: 'Used Dell Precision 3650', price: 150000, priceDisplay: 'Rs. 150,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'Dell' },
    
    // Used Lenovo Desktop PCs
    { title: 'Used Lenovo IdeaCentre Desktop', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Lenovo' },
    { title: 'Used Lenovo ThinkCentre M90', price: 60000, priceDisplay: 'Rs. 60,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Lenovo' },
    { title: 'Used Lenovo Legion Gaming Desktop', price: 120000, priceDisplay: 'Rs. 120,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Lenovo' },
    { title: 'Used Lenovo ThinkStation P350', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'Lenovo' },
    
    // Used Asus Desktop PCs
    { title: 'Used Asus VivoPC Desktop', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Asus' },
    { title: 'Used Asus ProArt Station', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'Asus' },
    { title: 'Used Asus ROG Strix Gaming', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Asus' },
    { title: 'Used Asus ExpertCenter', price: 50000, priceDisplay: 'Rs. 50,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Asus' }
];

// Used LCD Monitor products array
const usedLCDProducts = [
    // Used Samsung Monitors
    { title: 'Used Samsung 24" FHD Monitor', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Samsung' },
    { title: 'Used Samsung 27" QHD Gaming Monitor', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Samsung' },
    { title: 'Used Samsung 32" 4K Monitor', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Samsung' },
    { title: 'Used Samsung 34" Ultrawide Curved', price: 50000, priceDisplay: 'Rs. 50,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Samsung' },
    
    // Used LG Monitors
    { title: 'Used LG 24" FHD Monitor', price: 11000, priceDisplay: 'Rs. 11,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'LG' },
    { title: 'Used LG 27" 4K Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2020', brand: 'LG' },
    { title: 'Used LG 34" Ultrawide Curved', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'LG' },
    { title: 'Used LG 32" Gaming Monitor', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'LG' },
    
    // Used Dell Monitors
    { title: 'Used Dell 24" Business Monitor', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Dell' },
    { title: 'Used Dell 27" Professional Monitor', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Dell' },
    { title: 'Used Dell 32" 4K Monitor', price: 48000, priceDisplay: 'Rs. 48,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Dell' },
    { title: 'Used Dell 34" Ultrawide Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Dell' },
    
    // Used HP Monitors
    { title: 'Used HP 24" Business Monitor', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'HP' },
    { title: 'Used HP 27" QHD Monitor', price: 20000, priceDisplay: 'Rs. 20,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'HP' },
    { title: 'Used HP 32" 4K Monitor', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'HP' },
    { title: 'Used HP 27" Gaming Monitor', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'HP' },
    
    // Used Asus Monitors
    { title: 'Used Asus 24" Gaming Monitor', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Asus' },
    { title: 'Used Asus 27" ROG Gaming Monitor', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Asus' },
    { title: 'Used Asus 32" 4K Monitor', price: 50000, priceDisplay: 'Rs. 50,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Asus' },
    { title: 'Used Asus 34" Ultrawide Gaming', price: 52000, priceDisplay: 'Rs. 52,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Asus' }
];

// Used Accessories products array
const usedAccessoriesProducts = [
    // Used Keyboards
    { title: 'Used Logitech G Pro Mechanical Keyboard', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Logitech' },
    { title: 'Used Razer BlackWidow Chroma', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Razer' },
    { title: 'Used Corsair K70 RGB', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'Corsair' },
    { title: 'Used SteelSeries Apex Pro', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: '', condition: 'Excellent', year: '2021', brand: 'SteelSeries' },
    
    // Used Mice
    { title: 'Used Logitech G Pro X Superlight', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'Logitech' },
    { title: 'Used Razer DeathAdder V3 Pro', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'Razer' },
    { title: 'Used SteelSeries Prime Wireless', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'SteelSeries' },
    { title: 'Used Corsair M65 RGB Elite', price: 7000, priceDisplay: 'Rs. 7,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Corsair' },
    
    // Used Headphones
    { title: 'Used Sony WH-1000XM4', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Sony' },
    { title: 'Used Bose QuietComfort 45', price: 28000, priceDisplay: 'Rs. 28,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'Bose' },
    { title: 'Used Sennheiser HD 660S', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Sennheiser' },
    { title: 'Used Audio-Technica ATH-M50x', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Audio-Technica' },
    
    // Used Graphics Cards
    { title: 'Used NVIDIA RTX 3070', price: 50000, priceDisplay: 'Rs. 50,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'NVIDIA' },
    { title: 'Used NVIDIA RTX 3060 Ti', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'NVIDIA' },
    { title: 'Used AMD RX 6700 XT', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'AMD' },
    { title: 'Used AMD RX 6600 XT', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'AMD' },
    
    // Used Storage Drives
    { title: 'Used Samsung 970 EVO Plus 1TB', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Samsung' },
    { title: 'Used WD Black SN850 1TB', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', condition: 'Good', year: '2021', brand: 'Western Digital' },
    { title: 'Used Crucial P5 1TB', price: 7500, priceDisplay: 'Rs. 7,500', stock: 'In Stock', img: '', condition: 'Good', year: '2020', brand: 'Crucial' },
    { title: 'Used Seagate Barracuda 2TB HDD', price: 3000, priceDisplay: 'Rs. 3,000', stock: 'In Stock', img: '', condition: 'Good', year: '2019', brand: 'Seagate' }
];