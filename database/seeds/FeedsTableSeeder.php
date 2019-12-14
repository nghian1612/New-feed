<?php

use Illuminate\Database\Seeder;

class FeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feeds')->insert([
            [   
                'type_job' => '1', //1: fulltime - 2: partime 
                'title' => 'Công ty A tuyển dụng',
                'salary'=> '500.000',
                'level_exp'=>'0',
                'location'=>'Phú Nhuận, tp Hồ Chí Minh',
                'image' => null,
                'link_project' =>null,
                'description' =>'Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm
                Sáng tạo về mặt UI và UX.Tại sao bạn sẽ thích làm việc ở đây.
                ',
                'id_user'=>'1',
                'type_feed'=>'1', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Dự án website Food',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => 'project1.jpg',
                'link_project' =>'https://www.behance.net/gallery/43454381/Bonduelle-Website?tracking_source=search-all%7Cfood%20website',
                'description' =>'Dự án được thiết kế bằng bằng Photoshop',
                'id_user'=>'1',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Kinh nghiệm vàng để xin việc',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => null,
                'link_project' =>null,
                'description' =>'Ngày nay, do sự phát triển và hiệu năng thông tin sâu rộng , toàn khắp của báo chí, những quảng cáo thông tin tuyển dụng được phổ biến và có kết quả tốt. Nhưng đối với người tìm xin việc làm vẫn còn "thiên nan, vạn nan". Có người hàng ngày gửi hàng chục lá đơn xin việc làm mà chẳng có kết quả, thậm chí có người làm việc này liên tục hàng năm trời. ở bên Mỹ, có người mỗi ngày gửi hàng trăm lá thư và đã mua hàng chục tờ báo để tìm kiếm, thu thập các thông tin tuyển dụng. Đây là một loại giấy tờ thiết yếu chứng minh khả năng và thành tích. Có lẽ bạn đã quen với loại giấy tờ này từ lâu trong nhiều hoàn cảnh khác nhau.
                Trong nghề nghiệp, đây là tờ giấy tiến cử bạn vào một công việc hay một chức vụ mà bạn phải hết sức thận trọng khi viết ra, có khi bạn phải cân nhắc từng chữ hay từng câu văn.Có rất nhiều sinh viên học ở nhà trường rất xuất sắc, luôn luôn dẫn đầu với điểm số cao mà khi ra thực hành ở ngoài xã hội lại là người bết bát. Ngược lại có những sinh viên học tồi, luôn luôn ở cuối bảng mà khi ra đời lại trở nên là người lỗi lạc, nhờ năng khiếu và biết linh hoạt, năng động và sáng ý.Trong một cuộc vấn đáp bạn hãy bình tĩnh, và coi như "pha" mọi câu hỏi có tính cách "quay" ứng cử viên. Không có gì chết chóc cả. Không có gì đáng sợ. Cách tốt nhất là mở lời trước, bày tỏ lòng cám ơn lịch sự người sắp hỏi mình. Đó là một cách hàm chứa rằng bạn sẵn sàng ở thế vững vàng có thể chủ động mọi cuộc đối đáp. Bạn hãy coi người hỏi mình chỉ là người bình thường, chẳng qua là có chút ít trách vụ mà thôi, chẳng phải thần thánh gì cả. Nhưng bạn cũng phải khôn ngoan làm vui lòng người ta bằng một lời hay cử chỉ chào hỏi lịch sự để lấy lòng.
                ',
                'id_user'=>'1',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => '1', //1: fulltime - 2: partime 
                'title' => 'Công ty A tuyển dụng 2',
                'salary'=> '500.000',
                'level_exp'=>'0',
                'location'=>'Phú Nhuận, tp Hồ Chí Minh',
                'image' => null,
                'link_project' =>null,
                'description' =>'Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm
                Sáng tạo về mặt UI và UX.Tại sao bạn sẽ thích làm việc ở đây.
                ',
                'id_user'=>'2',
                'type_feed'=>'1', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Dự án website Food 2',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => 'project1.jpg',
                'link_project' =>'https://www.behance.net/gallery/43454381/Bonduelle-Website?tracking_source=search-all%7Cfood%20website',
                'description' =>'Dự án được thiết kế bằng bằng Photoshop',
                'id_user'=>'2',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Kinh nghiệm vàng để xin việc 2',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => null,
                'link_project' =>null,
                'description' =>'Ngày nay, do sự phát triển và hiệu năng thông tin sâu rộng , toàn khắp của báo chí, những quảng cáo thông tin tuyển dụng được phổ biến và có kết quả tốt. Nhưng đối với người tìm xin việc làm vẫn còn "thiên nan, vạn nan". Có người hàng ngày gửi hàng chục lá đơn xin việc làm mà chẳng có kết quả, thậm chí có người làm việc này liên tục hàng năm trời. ở bên Mỹ, có người mỗi ngày gửi hàng trăm lá thư và đã mua hàng chục tờ báo để tìm kiếm, thu thập các thông tin tuyển dụng. Đây là một loại giấy tờ thiết yếu chứng minh khả năng và thành tích. Có lẽ bạn đã quen với loại giấy tờ này từ lâu trong nhiều hoàn cảnh khác nhau.
                Trong nghề nghiệp, đây là tờ giấy tiến cử bạn vào một công việc hay một chức vụ mà bạn phải hết sức thận trọng khi viết ra, có khi bạn phải cân nhắc từng chữ hay từng câu văn.Có rất nhiều sinh viên học ở nhà trường rất xuất sắc, luôn luôn dẫn đầu với điểm số cao mà khi ra thực hành ở ngoài xã hội lại là người bết bát. Ngược lại có những sinh viên học tồi, luôn luôn ở cuối bảng mà khi ra đời lại trở nên là người lỗi lạc, nhờ năng khiếu và biết linh hoạt, năng động và sáng ý.Trong một cuộc vấn đáp bạn hãy bình tĩnh, và coi như "pha" mọi câu hỏi có tính cách "quay" ứng cử viên. Không có gì chết chóc cả. Không có gì đáng sợ. Cách tốt nhất là mở lời trước, bày tỏ lòng cám ơn lịch sự người sắp hỏi mình. Đó là một cách hàm chứa rằng bạn sẵn sàng ở thế vững vàng có thể chủ động mọi cuộc đối đáp. Bạn hãy coi người hỏi mình chỉ là người bình thường, chẳng qua là có chút ít trách vụ mà thôi, chẳng phải thần thánh gì cả. Nhưng bạn cũng phải khôn ngoan làm vui lòng người ta bằng một lời hay cử chỉ chào hỏi lịch sự để lấy lòng.
                ',
                'id_user'=>'2',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => '1', //1: fulltime - 2: partime 
                'title' => 'Công ty A tuyển dụng 3',
                'salary'=> '500.000',
                'level_exp'=>'0',
                'location'=>'Phú Nhuận, tp Hồ Chí Minh',
                'image' => null,
                'link_project' =>null,
                'description' =>'Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm
                Sáng tạo về mặt UI và UX.Tại sao bạn sẽ thích làm việc ở đây.
                ',
                'id_user'=>'3',
                'type_feed'=>'1', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Dự án website Food 3',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => 'project1.jpg',
                'link_project' =>'https://www.behance.net/gallery/43454381/Bonduelle-Website?tracking_source=search-all%7Cfood%20website',
                'description' =>'Dự án được thiết kế bằng bằng Photoshop',
                'id_user'=>'3',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Kinh nghiệm vàng để xin việc 3',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => null,
                'link_project' =>null,
                'description' =>'Ngày nay, do sự phát triển và hiệu năng thông tin sâu rộng , toàn khắp của báo chí, những quảng cáo thông tin tuyển dụng được phổ biến và có kết quả tốt. Nhưng đối với người tìm xin việc làm vẫn còn "thiên nan, vạn nan". Có người hàng ngày gửi hàng chục lá đơn xin việc làm mà chẳng có kết quả, thậm chí có người làm việc này liên tục hàng năm trời. ở bên Mỹ, có người mỗi ngày gửi hàng trăm lá thư và đã mua hàng chục tờ báo để tìm kiếm, thu thập các thông tin tuyển dụng. Đây là một loại giấy tờ thiết yếu chứng minh khả năng và thành tích. Có lẽ bạn đã quen với loại giấy tờ này từ lâu trong nhiều hoàn cảnh khác nhau.
                Trong nghề nghiệp, đây là tờ giấy tiến cử bạn vào một công việc hay một chức vụ mà bạn phải hết sức thận trọng khi viết ra, có khi bạn phải cân nhắc từng chữ hay từng câu văn.Có rất nhiều sinh viên học ở nhà trường rất xuất sắc, luôn luôn dẫn đầu với điểm số cao mà khi ra thực hành ở ngoài xã hội lại là người bết bát. Ngược lại có những sinh viên học tồi, luôn luôn ở cuối bảng mà khi ra đời lại trở nên là người lỗi lạc, nhờ năng khiếu và biết linh hoạt, năng động và sáng ý.Trong một cuộc vấn đáp bạn hãy bình tĩnh, và coi như "pha" mọi câu hỏi có tính cách "quay" ứng cử viên. Không có gì chết chóc cả. Không có gì đáng sợ. Cách tốt nhất là mở lời trước, bày tỏ lòng cám ơn lịch sự người sắp hỏi mình. Đó là một cách hàm chứa rằng bạn sẵn sàng ở thế vững vàng có thể chủ động mọi cuộc đối đáp. Bạn hãy coi người hỏi mình chỉ là người bình thường, chẳng qua là có chút ít trách vụ mà thôi, chẳng phải thần thánh gì cả. Nhưng bạn cũng phải khôn ngoan làm vui lòng người ta bằng một lời hay cử chỉ chào hỏi lịch sự để lấy lòng.
                ',
                'id_user'=>'3',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => '1', //1: fulltime - 2: partime 
                'title' => 'Công ty A tuyển dụng 4',
                'salary'=> '500.000',
                'level_exp'=>'0',
                'location'=>'Phú Nhuận, tp Hồ Chí Minh',
                'image' => null,
                'link_project' =>null,
                'description' =>'Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm
                Sáng tạo về mặt UI và UX.Tại sao bạn sẽ thích làm việc ở đây.
                ',
                'id_user'=>'4',
                'type_feed'=>'1', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Dự án website Food 4',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => 'project1.jpg',
                'link_project' =>'https://www.behance.net/gallery/43454381/Bonduelle-Website?tracking_source=search-all%7Cfood%20website',
                'description' =>'Dự án được thiết kế bằng bằng Photoshop',
                'id_user'=>'4',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],
            [   
                'type_job' => null, //1: fulltime - 2: partime 
                'title' => 'Kinh nghiệm vàng để xin việc 4',
                'salary'=> null,
                'level_exp'=>null,
                'location'=>null,
                'image' => null,
                'link_project' =>null,
                'description' =>'Ngày nay, do sự phát triển và hiệu năng thông tin sâu rộng , toàn khắp của báo chí, những quảng cáo thông tin tuyển dụng được phổ biến và có kết quả tốt. Nhưng đối với người tìm xin việc làm vẫn còn "thiên nan, vạn nan". Có người hàng ngày gửi hàng chục lá đơn xin việc làm mà chẳng có kết quả, thậm chí có người làm việc này liên tục hàng năm trời. ở bên Mỹ, có người mỗi ngày gửi hàng trăm lá thư và đã mua hàng chục tờ báo để tìm kiếm, thu thập các thông tin tuyển dụng. Đây là một loại giấy tờ thiết yếu chứng minh khả năng và thành tích. Có lẽ bạn đã quen với loại giấy tờ này từ lâu trong nhiều hoàn cảnh khác nhau.
                Trong nghề nghiệp, đây là tờ giấy tiến cử bạn vào một công việc hay một chức vụ mà bạn phải hết sức thận trọng khi viết ra, có khi bạn phải cân nhắc từng chữ hay từng câu văn.Có rất nhiều sinh viên học ở nhà trường rất xuất sắc, luôn luôn dẫn đầu với điểm số cao mà khi ra thực hành ở ngoài xã hội lại là người bết bát. Ngược lại có những sinh viên học tồi, luôn luôn ở cuối bảng mà khi ra đời lại trở nên là người lỗi lạc, nhờ năng khiếu và biết linh hoạt, năng động và sáng ý.Trong một cuộc vấn đáp bạn hãy bình tĩnh, và coi như "pha" mọi câu hỏi có tính cách "quay" ứng cử viên. Không có gì chết chóc cả. Không có gì đáng sợ. Cách tốt nhất là mở lời trước, bày tỏ lòng cám ơn lịch sự người sắp hỏi mình. Đó là một cách hàm chứa rằng bạn sẵn sàng ở thế vững vàng có thể chủ động mọi cuộc đối đáp. Bạn hãy coi người hỏi mình chỉ là người bình thường, chẳng qua là có chút ít trách vụ mà thôi, chẳng phải thần thánh gì cả. Nhưng bạn cũng phải khôn ngoan làm vui lòng người ta bằng một lời hay cử chỉ chào hỏi lịch sự để lấy lòng.
                ',
                'id_user'=>'4',
                'type_feed'=>'2', //1: tuyển dụng //2: show project //3: chia sẽ
                'status'=>'1'
            ],

        ]);
    }
}
