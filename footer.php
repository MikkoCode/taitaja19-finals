</div> <!-- Closing tag for the container div started in header.php -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('langSwitch').addEventListener('click', function() {
    if (document.documentElement.lang === 'en') {
      document.documentElement.lang = 'fi';
      this.textContent = 'Switch to English';
    } else {
      document.documentElement.lang = 'en';
      this.textContent = 'Switch to Finnish';
    }
  });
</script>
</body>
</html>
