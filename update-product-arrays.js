// Script to update all HTML files to use centralized product arrays from data.js
// This script will help identify which files need to be updated

const filesToUpdate = [
    // Files that need product array updates
    'headphones.html',
    'mouse.html', 
    'graphic-cards.html',
    'motherboards.html',
    'laptop-memories.html',
    'desktop-memories.html',
    'drives.html',
    'pc-casing.html',
    'power-supply.html',
    'scanners.html',
    'tv-box.html',
    'toner-cartridges.html',
    'ups.html',
    'used-laptops.html',
    'used-desktop-pcs.html',
    'used-lcds.html',
    'used-accessories.html'
];

const productArrayMappings = {
    'headphones.html': 'headphonesProducts',
    'mouse.html': 'mouseProducts',
    'graphic-cards.html': 'graphicsCardProducts', 
    'motherboards.html': 'motherboardProducts',
    'laptop-memories.html': 'laptopMemoryProducts',
    'desktop-memories.html': 'desktopMemoryProducts',
    'drives.html': 'driveProducts',
    'pc-casing.html': 'pcCasingProducts',
    'power-supply.html': 'powerSupplyProducts',
    'scanners.html': 'scannerProducts',
    'tv-box.html': 'tvBoxProducts',
    'toner-cartridges.html': 'tonerProducts',
    'ups.html': 'upsProducts',
    'used-laptops.html': 'usedLaptopProducts',
    'used-desktop-pcs.html': 'usedDesktopProducts',
    'used-lcds.html': 'usedLCDProducts',
    'used-accessories.html': 'usedAccessoriesProducts'
};

console.log('Files that need to be updated:');
filesToUpdate.forEach(file => {
    console.log(`${file} -> use ${productArrayMappings[file]}`);
});

console.log('\nUpdate pattern for each file:');
console.log('1. Remove the local product array definition');
console.log('2. Add: const products = ' + productArrayMappings[file] + ';');
console.log('3. Update filterProducts() to use "products" instead of local array name');
console.log('4. Update filteredProducts initialization to use "products.slice()"'); 