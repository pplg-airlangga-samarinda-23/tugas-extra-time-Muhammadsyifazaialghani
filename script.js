document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      // Simple validation
      if (username && password) {
        // In a real application, you would validate credentials with a server
        window.location.href = "dashboard.html";
      }
    });
  }

  const tableBody = document.querySelector(".inventory-table tbody");
  if (tableBody) {
    const sampleData = [
      {
        no: 1,
        namaBarang: "laptop asus tuf",
        pengadaan: "2010-11-11",
        stok: 5,
        baik: 100,
        rusak: 0,
      },
      {
        no: 1,
        namaBarang: "laptop asus tuf",
        pengadaan: "2010-11-11",
        stok: 5,
        baik: 100,
        rusak: 0,
      },
      {
        no: 1,
        namaBarang: "laptop asus tuf",
        pengadaan: "2010-11-11",
        stok: 5,
        baik: 100,
        rusak: 0,
      },
      {
        no: 1,
        namaBarang: "laptop asus tuf",
        pengadaan: "2010-11-11",
        stok: 5,
        baik: 100,
        rusak: 0,
      },
      {
        no: 1,
        namaBarang: "laptop asus tuf",
        pengadaan: "2010-11-11",
        stok: 5,
        baik: 100,
        rusak: 0,
      },
    ];

    sampleData.forEach((item) => {
      const row = document.createElement("tr");
      row.innerHTML = `
                <td>${item.no}</td>
                <td>${item.namaBarang}</td>
                <td>${item.pengadaan}</td>
                <td>${item.stok}</td>
                <td>${item.baik}</td>
                <td>${item.rusak}</td>
            `;
      tableBody.appendChild(row);
    });
  }
});
