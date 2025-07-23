// Used Accessories product data
const usedAccessoriesProducts = [
    // Mouse
    { title: 'Logitech G502 HERO Mouse (Used)', price: 3500, priceDisplay: 'Rs. 3,500', stock: 'In Stock', img: '', condition: 'Good', category: 'Mouse', brand: 'Logitech' },
    { title: 'Razer DeathAdder V2 Mouse (Used)', price: 4000, priceDisplay: 'Rs. 4,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Mouse', brand: 'Razer' },
    { title: 'SteelSeries Rival 3 Mouse (Used)', price: 2500, priceDisplay: 'Rs. 2,500', stock: 'In Stock', img: '', condition: 'Good', category: 'Mouse', brand: 'SteelSeries' },
    { title: 'Corsair M65 RGB Mouse (Used)', price: 4500, priceDisplay: 'Rs. 4,500', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Mouse', brand: 'Corsair' },
    
    // Keyboard
    { title: 'Logitech G Pro Keyboard (Used)', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Keyboard', brand: 'Logitech' },
    { title: 'Razer BlackWidow Keyboard (Used)', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Keyboard', brand: 'Razer' },
    { title: 'SteelSeries Apex Pro Keyboard (Used)', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Keyboard', brand: 'SteelSeries' },
    { title: 'Corsair K70 Keyboard (Used)', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Keyboard', brand: 'Corsair' },
    
    // Headphones
    { title: 'Logitech G Pro X Headset (Used)', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Headphones', brand: 'Logitech' },
    { title: 'Razer Kraken Headset (Used)', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Headphones', brand: 'Razer' },
    { title: 'SteelSeries Arctis 7 Headset (Used)', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Headphones', brand: 'SteelSeries' },
    { title: 'Corsair HS70 Headset (Used)', price: 9000, priceDisplay: 'Rs. 9,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Headphones', brand: 'Corsair' },
    
    // Monitor
    { title: 'Samsung 24" Monitor (Used)', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Monitor', brand: 'Samsung' },
    { title: 'LG 27" Monitor (Used)', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Monitor', brand: 'LG' },
    { title: 'Samsung 32" 4K Monitor (Used)', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Monitor', brand: 'Samsung' },
    { title: 'LG 34" Ultrawide Monitor (Used)', price: 45000, priceDisplay: 'Rs. 45,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Monitor', brand: 'LG' },
    
    // Webcam
    { title: 'Logitech C920 Webcam (Used)', price: 6000, priceDisplay: 'Rs. 6,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Webcam', brand: 'Logitech' },
    { title: 'Logitech StreamCam (Used)', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Webcam', brand: 'Logitech' },
    { title: 'Razer Kiyo Webcam (Used)', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Webcam', brand: 'Razer' },
    
    // Speakers
    { title: 'Logitech Z623 Speakers (Used)', price: 8000, priceDisplay: 'Rs. 8,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Speakers', brand: 'Logitech' },
    { title: 'Corsair SP2500 Speakers (Used)', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Speakers', brand: 'Corsair' },
    { title: 'Razer Nommo Speakers (Used)', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Speakers', brand: 'Razer' },
    
    // Gaming Accessories
    { title: 'SteelSeries QcK Mousepad (Used)', price: 1500, priceDisplay: 'Rs. 1,500', stock: 'In Stock', img: '', condition: 'Good', category: 'Mouse', brand: 'SteelSeries' },
    { title: 'Razer Firefly Mousepad (Used)', price: 3000, priceDisplay: 'Rs. 3,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Mouse', brand: 'Razer' },
    { title: 'Corsair MM800 Mousepad (Used)', price: 4000, priceDisplay: 'Rs. 4,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Mouse', brand: 'Corsair' },
    
    // Additional Accessories
    { title: 'Logitech G29 Racing Wheel (Used)', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Gaming', brand: 'Logitech' },
    { title: 'Razer Tartarus Keypad (Used)', price: 6000, priceDisplay: 'Rs. 6,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Keyboard', brand: 'Razer' },
    { title: 'SteelSeries Rival 600 Mouse (Used)', price: 5000, priceDisplay: 'Rs. 5,000', stock: 'In Stock', img: '', condition: 'Good', category: 'Mouse', brand: 'SteelSeries' },
    { title: 'Corsair Scimitar Mouse (Used)', price: 7000, priceDisplay: 'Rs. 7,000', stock: 'In Stock', img: '', condition: 'Excellent', category: 'Mouse', brand: 'Corsair' }
];
