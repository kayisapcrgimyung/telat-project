document.getElementById("lateForm").addEventListener("submit", function(event) {
  event.preventDefault();

  const studentName = document.getElementById("studentName").value;
  const lateReason = document.getElementById("lateReason").value;
  const lateTime = document.getElementById("lateTime").value;

  // Tambahkan data keterlambatan ke tabel
  const table = document.getElementById("recordTable").getElementsByTagName('tbody')[0];
  const newRow = table.insertRow();
  newRow.innerHTML = `
    <td>${studentName}</td>
    <td>${lateReason}</td>
    <td>${lateTime}</td>
  `;

  // Reset form setelah submit
  document.getElementById("lateForm").reset();
});
