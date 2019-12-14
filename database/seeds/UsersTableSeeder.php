<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Tăng Diệp Thuận',
                'email' => 'thuantang@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Thuận tự giới thiệu về bản thân',
                'location' => 'Gò Vập, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'UI/UX Designer'
            ],
            [
                'name' => 'Nguyễn Chí Minh',
                'email' => 'minhnguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Minh tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'usr-img1.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end Developer'
            ],
            [
                'name' => 'Trương Trung Hiếu',
                'email' => 'hieutruong@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Hiếu tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Mobile app Developer'
            ],
            [
                'name' => 'Nghĩa Nguyễn',
                'email' => 'nghianguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Nghĩa tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'usr-img2.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => '1',
                'estalish' => null,
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Dương Đình Kha',
                'email' => 'khaduong@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Kha tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => '1',
                'estalish' => null,
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ NMHT1',
                'email' => 'congty1@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty NMHT1',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'rock.jpg',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ JDNEJK',
                'email' => 'congty2@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty JDNEJK',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user2.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Du Lịch Đông A',
                'email' => 'congty3@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty Du Lịch Đông A',
                'location' => 'Số 8 Ngõ 91/45 Nguyễn Chí Thanh - Đống Đa - Hà Nội',
                'avatar' => 'donga.jpg',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'Tổ chức Tour du lịch, Cho thuê xe ô tô, Đại lý Bán xe ô tô, đại lý vé máy bay , kinh doanh du lịch, khách sạn và lữ hành'
            ],
            [
                'name' => 'CÔNG TY TNHH TỐP TÊN',
                'email' => 'congty4@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty TỐP TÊN',
                'location' => '102 – 104 Thạch Thị Thanh, phường Tân Định, Quận 1, HCM',
                'avatar' => 'tten.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'Bán hàng, Nhân viên kinh doanh, Tư vấn/ Chăm sóc khách hàng'
            ],
            [
                'name' => 'Công Ty Cổ Phần Đầu Tư Thương Mại Và Du Lịch Phương Nam',
                'email' => 'congty5@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty Cổ Phần Đầu Tư Thương Mại Và Du Lịch Phương Nam',
                'location' => 'B6/57 Láng Hạ, Thành Công, Ba Đình, Hà Nội',
                'avatar' => 'pnam.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'Bán hàng, Nhân viên kinh doanh, Tư vấn/ Chăm sóc khách hàng'
            ],
            [
                'name' => 'CÔNG TY CỔ PHẦN CUNG ỨNG NHÂN LỰC QUỐC TẾ POLIMEX',
                'email' => 'congty6@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty CỔ PHẦN CUNG ỨNG NHÂN LỰC QUỐC TẾ POLIMEX',
                'location' => '81 Lê Đức Thọ, Mỹ Đình, Nam Từ Liêm, Hà Nội',
                'avatar' => 'pnam.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'Tổ chức Tour du lịch, Cho thuê xe ô tô, Đại lý Bán xe ô tô, đại lý vé máy bay , kinh doanh du lịch, khách sạn và lữ hành'
            ],
            [
                'name' => 'Nguyễn Trọng Tiến',
                'email' => 'tiennt@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Tiến tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user1.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end master'
            ],
            [
                'name' => 'Nguyễn Trung Dũng',
                'email' => 'dungnt@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Dũng tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user3.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end programmer'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('phaidau'),
                'about_yourself' => 'Bạn Tiến tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-defaut.png',
                'background' => 'cover-img.jpg',
                'type_user' => '3',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Fullstack Developer'
            ],
            [
                'name' => 'Trần Trọng Hoàng',
                'email' => 'hoangtt@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Hoàng tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user1.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end developer'
            ],
            [
                'name' => 'Lê Trọng Tài',
                'email' => 'tailt@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Tài tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user3.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end master'
            ],
            [
                'name' => 'Bùi Trung Thiện',
                'email' => 'thienbt@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Thiện tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'usr-img2.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end master'
            ],
        ]);
    }
}
