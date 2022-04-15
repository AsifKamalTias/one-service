const viewWorkers = document.getElementById('view-workers');
const viewCustomers = document.getElementById('view-customers');
const viewModerators = document.getElementById('view-moderators');
const viewServices = document.getElementById('view-services');
const viewOrders = document.getElementById('view-orders');
const viewIncomeHistory = document.getElementById('view-income-history');

viewWorkers.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-workers.php';
});

viewCustomers.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-customers.php';
});

viewModerators.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-moderators.php';
});

viewServices.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-services.php';
});

viewOrders.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-orders.php';
});

viewIncomeHistory.addEventListener('click', (e) => {
    e.preventDefault();
    window.location.href = '../../Views/admin/view-income-history.php';
});