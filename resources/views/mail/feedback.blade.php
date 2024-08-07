
<h4>Xin chào, {{ $data['name'] }}</h4>
<i>Chúc mừng bạn đã hoàn thành bài kiểm tra.</i><br><br>


<table border="1" style="border-collapse: collapse;">
    <tr>
        <td style="padding: 10px; width: 200px;"><b>Tên thí sinh</b></td>
        <td style="padding: 10px; width: 200px;">{{ $data['name'] }}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Kết quả</b></td>
        <td style="padding: 10px;">{{ $data['score'] }}/{{ $data['count_quiz'] }} câu</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Số điểm đạt được</b></td>
        <td style="padding: 10px;">{{ round(($data['score'] / $data['count_quiz']) * 10, 2) }} điểm</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Danh mục</b></td>
        <td style="padding: 10px;">{{ $data['category'] }}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Tiêu đề</b></td>
        <td style="padding: 10px;">{{ $data['title'] }}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Mô tả</b></td>
        <td style="padding: 10px;">{{ $data['description'] }}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Thời gian</b></td>
        <td style="padding: 10px;">{{ $data['duration'] }} phút</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><b>Loại câu hỏi</b></td>
        <td style="padding: 10px;">{{ $data['type'] }}</td>
    </tr>
</table><br>

<p>Cảm ơn bạn đã đánh giá cho chúng tôi <b>{{ $data['star'] }} &#9733;</b>, với nội dung "{{ $data['content'] }}".</p><br>

<i>QuizLet</i><br>
<i>start.quizlet@gmail.com</i>