  <!-- Bootstrap core JavaScript-->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/assets/js/demo/chart-area-demo.js"></script>
  <script src="/assets/js/demo/chart-pie-demo.js"></script>

  <script>
    // JavaScript for sidebar toggle
document.getElementById('sidebarToggle').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open');
});

document.getElementById('sidebarClose').addEventListener('click', function () {
    document.getElementById('sidebar').classList.remove('open');
});
  </script>

  <style>
    /* Custom styles for the sidebar */
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px; /* Hide sidebar initially */
    background-color: #343a40;
    transition: 0.3s;
    overflow-x: hidden;
    color: white;
}

.sidebar-header {
    padding: 15px;
    background: #007bff;
}

.sidebar-header h3 {
    margin: 0;
}

.sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 16px;
    color: #f8f9fa;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    background: #575d63;
}

#sidebarToggle {
    position: absolute;
    top: 15px;
    left: 15px;
}

#sidebarClose {
    position: absolute;
    top: 15px;
    right: 15px;
}

/* When the sidebar is open */
.sidebar.open {
    left: 0;
}

#content {
    transition: margin-left 0.3s;
}

.sidebar.open ~ #content {
    margin-left: 250px;
}

  </style>
</body>

</html>