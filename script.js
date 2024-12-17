document.addEventListener("DOMContentLoaded", () => {
  const expenseForm = document.getElementById("expense-form");
  const expenseList = document.getElementById("expense-list");
  const totalAmount = document.getElementById("total-amount");
  const filterCategory = document.getElementById("filter-category");

  let expenses = [];

  expenseForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const name = document.getElementById("expense-name").value;
    const amount = parseFloat(document.getElementById("expense-amount").value);
    const category = document.getElementById("expense-category").value;

    const expense = {
      id: Date.now(),
      name,
      category,
      amount,
    };

    expenses.push(expense);
    displayExpenses(expenses);
    updateTotalAmount();

    expenseForm.reset();
  });

  expenseList.addEventListener("click", (e) => {
    if (e.target.classList.contains("delete-btn")) {
      const id = parseInt(e.target.dataset.id);
      expenses = expenses.filter((expense) => expense.id !== id);
      displayExpenses(expenses);
      updateTotalAmount();
    }

    if (e.target.classList.contains("edit-btn")) {
      const id = parseInt(e.target.dataset.id);
      const expense = expenses.find((expense) => expense.id === id);

      document.getElementById("expense-name").value = expense.name;
      document.getElementById("expense-amount").value = expense.amount;
      document.getElementById("expense-category").value = expense.category;
      document.getElementById("expense-date").value = expense.date;

      expenses = expenses.filter((expense) => expense.id !== id);
      displayExpenses(expenses);
      updateTotalAmount();
    }
  });

  filterCategory.addEventListener("change", (e) => {
    const category = e.target.value;
    if (category === "All") {
      displayExpenses(expenses);
    } else {
      const filteredExpenses = expenses.filter(
        (expense) => expense.category === category
      );
      displayExpenses(filteredExpenses);
    }
  });

  function displayExpenses(expenses) {
    expenseList.innerHTML = "";
    expenses.forEach((expense) => {
      const row = document.createElement("tr");

      row.innerHTML = `
              <td>${expense.name}</td>
              <td>${expense.category}</td>
              <td>${
                expense.category === "Develop Pages"
                  ? "IDR 100,000"
                  : "IDR 75,000"
              }</td>
              <td>${expense.amount}</td>
              <td>
                  <button class="delete-btn" data-id="${
                    expense.id
                  }">Delete</button>
              </td>
          `;

      expenseList.appendChild(row);
    });
  }

  function updateTotalAmount() {
    const total = expenses.reduce(
      (sum, expense) =>
        sum +
        expense.amount *
          (expense.category === "Develop Pages" ? 100000 : 75000),
      0
    );

    totalAmount.textContent = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
});
