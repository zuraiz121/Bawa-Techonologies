// Script to update all pages with new card design
// This script will help identify which pages need to be updated

const pagesToUpdate = [
    'desktop-pcs.html',
    'monitors.html', 
    'graphic-cards.html',
    'headphones.html',
    'mouse.html',
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
    'used-accessories.html',
    'used-lcds.html'
];

console.log('Pages that need to be updated with new card design:');
pagesToUpdate.forEach(page => {
    console.log(`- ${page}`);
});

console.log('\nFor each page, you need to:');
console.log('1. Add: <link rel="stylesheet" href="css/new-cards.css">');
console.log('2. Update renderProducts function to use new card structure');
console.log('3. Add cart and wishlist functions');
console.log('4. Update cart counter initialization'); 