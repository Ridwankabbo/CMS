// Function to display a message
// function showMessage(message, type = 'success') {
//     const messageBox = document.getElementById('message-box');
//     messageBox.textContent = message;
//     messageBox.className = `fixed top-4 left-1/2 transform -translate-x-1/2 bg-${type === 'success' ? 'green' : 'red'}-100 text-${type === 'success' ? 'green' : 'red'}-700 border border-${type === 'success' ? 'green' : 'red'}-400 px-4 py-2 rounded shadow-md z-50`;
//     messageBox.classList.add('show');
//     setTimeout(() => {
//         messageBox.classList.remove('show');
//     }, 3000); // Hide after 3 seconds
// }

// // Check for saved state on page load
// document.addEventListener('DOMContentLoaded', () => {
//     const savedMessage = sessionStorage.getItem('message');
//     const savedMessageType = sessionStorage.getItem('messageType');
//     if (savedMessage) {
//         showMessage(savedMessage, savedMessageType);
//         sessionStorage.removeItem('message'); // Clear message after displaying
//         sessionStorage.removeItem('messageType');
//     }

//     // Simulate fetching recent posts (replace with actual data fetching)
//     const recentPosts = [
//         { title: 'Post 1', category: 'Category 1', author: 'Admin', date: '2024-07-28' },
//         { title: 'Post 2', category: 'Category 2', author: 'Editor', date: '2024-07-27' },
//         { title: 'Post 3', category: 'Category 1', author: 'Author', date: '2024-07-26' },
//     ];

//     const recentPostsTable = document.getElementById('recent-posts-table');
//     const noRecentPostsMessage = document.getElementById('no-recent-posts');

//     if (recentPosts && recentPosts.length > 0) {
//         recentPostsTable.classList.remove('hidden');
//         noRecentPostsMessage.classList.add('hidden');
//         const tbody = recentPostsTable.querySelector('tbody');
//         tbody.innerHTML = recentPosts.map(post => `
//             <tr>
//                 <td class="px-4 py-2">${post.title}</td>
//                 <td class="px-4 py-2">${post.category}</td>
//                 <td class="px-4 py-2">${post.author}</td>
//                 <td class="px-4 py-2">${post.date}</td>
//             </tr>
//         `).join('');
//     } else {
//         recentPostsTable.classList.add('hidden');
//         noRecentPostsMessage.classList.remove('hidden');
//     }
// });


//For  admin panel 

// const mobileMenuButton = document.getElementById('mobile-menu-button');
//         const mobileMenu = document.getElementById('mobile-menu');
//         const logoutButton = document.getElementById('logout-button');

//         if (mobileMenuButton && mobileMenu) {
//             mobileMenuButton.addEventListener('click', () => {
//                 mobileMenu.classList.toggle('hidden');
//             });
//         }

//         document.addEventListener('click', (event) => {
//             if (mobileMenu && !mobileMenu.classList.contains('hidden') && !mobileMenu.contains(event.target) && event.target !== mobileMenuButton) {
//                 mobileMenu.classList.add('hidden');
//             }
//         });

//         if (logoutButton) {
//             logoutButton.addEventListener('click', () => {
//                 alert('Logging out...');
//                 window.location.href = '/login';
//             });
//         }