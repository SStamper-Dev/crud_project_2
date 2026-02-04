const TOPPINGS_LIST = ["None", "Pepperoni", "Sausage", "Bacon", "Extra Cheese", "Mushrooms", "Green Peppers", "Olives", "Pineapple"];

// Setup topping menus
document.querySelectorAll('.topping-select').forEach(select => {
    select.innerHTML = TOPPINGS_LIST.map(t => `<option value="${t}">${t}</option>`).join('');
});

const urlParams = new URLSearchParams(window.location.search);
const currentPage = parseInt(urlParams.get('page')) || 1;

fetch(`api.php?page=${currentPage}`)
    .then(response => response.json())
    .then(data => {
        document.getElementById('statTotal').innerText = data.total_records;
        document.getElementById('statTopTopping').innerText = data.top_topping;
        document.getElementById('pageTitle').innerText = `Active Orders (Page ${currentPage} of ${data.total_pages})`;

        const grid = document.getElementById('orderGrid');
        data.orders.forEach(order => {
            const card = document.createElement('div');
            card.className = 'order-card';
            card.innerHTML = `
                <h4>${order.size} ${order.crust}</h4>
                <p>Toppings: ${order.t1}, ${order.t2}, ${order.t3}</p>
                <p><strong>${order.type}</strong></p>
                <div style="display:flex; gap:10px;">
                    <button onclick='openEdit(${JSON.stringify(order)})' class="btn-edit">Edit</button>
                    <form method="POST" action="api.php" onsubmit="return confirm('Cancel order?')">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="${order.id}">
                        <input type="hidden" name="page" value="${currentPage}">
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </div>`;
            grid.appendChild(card);
        });

        renderPagination(data.total_pages);
    });

// Logic for pagination (project requirement)
function renderPagination(totalPages) {
    const nav = document.getElementById('pagination');
    
    const prevClass = currentPage <= 1 ? 'btn-nav disabled' : 'btn-nav';
    const nextClass = currentPage >= totalPages ? 'btn-nav disabled' : 'btn-nav';

    nav.innerHTML = `
        <a href="index.html?page=${currentPage - 1}" class="${prevClass}">Previous</a>
        <span>Page <strong>${currentPage}</strong> of ${totalPages}</span>
        <a href="index.html?page=${currentPage + 1}" class="${nextClass}">Next</a>
    `;
    
    // If disabled, no clicking
    document.querySelectorAll('.disabled').forEach(el => el.onclick = (e) => e.preventDefault());
}

// Edit popup window
window.openEdit = (order) => {
    document.getElementById('editId').value = order.id;
    document.getElementById('editPageHidden').value = currentPage;
    document.getElementById('editSize').value = order.size;
    document.getElementById('editCrust').value = order.crust;
    document.getElementById('editT1').value = order.t1;
    document.getElementById('editT2').value = order.t2;
    document.getElementById('editT3').value = order.t3;
    document.getElementById('editType').value = order.type;
    document.getElementById('editModal').style.display = 'block';
};

window.closeModal = () => document.getElementById('editModal').style.display = 'none';