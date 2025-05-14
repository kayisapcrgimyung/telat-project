document.getElementById("userType").addEventListener("change", function() {
  const nipSection = document.getElementById("nipSection");
  if (this.value === "guru") {
    nipSection.style.display = "block";
  } else {
    nipSection.style.display = "none"; 
  }
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();

  const userType = document.getElementById("userType").value;
  const username = document.getElementById("username").value;
  const nip = document.getElementById("nip").value;

  if (userType === "guru" && !nip) {
    alert("NIP harus diisi untuk login sebagai guru");
    return;
  }

  if (userType === "murid" && username.toLowerCase() === "rasya") {
    alert("Login berhasil sebagai siswa Rasya");

    localStorage.setItem("userType", "murid");
    localStorage.setItem("username", "Rasya");

    window.location.href = "/login";
  } else if (userType === "guru" && username.toLowerCase() === "abde" && nip === "55667868") {
    alert("Login berhasil sebagai guru Abde");

    localStorage.setItem("userType", "guru");
    localStorage.setItem("username", "Abde");

    window.location.href = "guruLog";
  } else {
    alert("Username atau NIP salah. Silakan coba lagi.");
  }
});
  