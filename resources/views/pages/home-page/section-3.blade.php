<div class="section-3 d-flex align-items-center justify-content-center" id="lien-he">
    <form action="" class="p-4 shadow-effect border-radius" style="height: 60%;" data-aos="fade-up"
          data-aos-duration="1500" id="registration-form">
        <img src="{{'images/homepage/section-3/form-title.png'}}" alt="" class="img-fluid mb-3"
             style="scale: 80%; transform: translateY(8%)">
        <div class="mb-4 mt-2">
            <input type="text" class="form-control montserrat-semibold" id="name" name="name" placeholder="Họ và tên">
        </div>
        <div class="mb-4 mt-4">
            <input type="number" class="form-control montserrat-semibold" id="phone" name="phone"
                   placeholder="Số điện thoại">
        </div>
        <textarea class="form-control mb-4 mt-3 montserrat-semibold" name="question" id="question"
                  placeholder="Bạn đang muốn tư vấn thiết kế hay thi công ?"></textarea>
        <div class="d-flex align-items-center justify-content-center" style="transform: translateY(-8%)">
            <button type="submit" class="btn bg-white blue-text mt-3 me-2 montserrat-bold">NHẬN TƯ VẤN NGAY</button>
        </div>
    </form>
</div>
<style>
    @media only screen and (max-width: 800px) {
        .section-3 form {
            width: 90%;
        }
    }
</style>
<script>
    $('#registration-form').submit(function (e) {
        e.preventDefault();
        let name = $('#name').val();
        let phone = $('#phone').val();
        let question = $('#question').val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        alert('Bạn đã gửi thông tin thành công');
        // $('.svg-input-customer-mb').val('');
        // $('.svg-input-bot-mb').val('');
        $.ajax({
            url: '/send-register', // Thay đổi đường dẫn tới phần xử lý dữ liệu
            method: 'POST',
            data: {
                name: name,
                phone: phone,
                question: question,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {

            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
