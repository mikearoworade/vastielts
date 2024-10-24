<script>
        // Function to toggle sidebar visibility
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const navbar = document.getElementById('navbar');
            
            // Toggle the 'minimized' class
            sidebar.classList.toggle('minimized');
            mainContent.classList.toggle('minimized');
            navbar.classList.toggle('minimized');
        }
    </script>

</body>
</html>