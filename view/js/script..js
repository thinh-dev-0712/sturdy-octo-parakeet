<script>
        // Lấy danh sách các thẻ h2 trong phần l1
        var h2Elements = document.querySelectorAll('.l1 h2');

        // Lặp qua từng thẻ h2 và gắn sự kiện click
        h2Elements.forEach(function(h2) {
            h2.addEventListener('click', function() {
                // Bỏ thuộc tính font-weight bold của tất cả các h2 trong l1
                h2Elements.forEach(function(el) {
                    el.classList.remove('active');
                });

                // Thêm thuộc tính font-weight bold cho h2 được click
                this.classList.add('active');
            })
        })

        
    </script>