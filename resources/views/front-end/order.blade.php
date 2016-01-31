@extends('front-end.layouts.main')
@section('content')
<div class="container box padding-top checkout">
    <div class="row">
        <div class="col-xs-12">
            <h3>Checkout</h3>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <form role="form" method="post" id="order_form" action="">
                    <input type="hidden" name="deal_id" value="156">
                    <input type="hidden" name="deal_permalink" value="pack-of-3-branded-replica-polo-shirts">
                    <input type="hidden" name="deal" value="Pack of 3 Branded Replica Polo Shirts">
                    <input type="hidden" name="total" value="999">
                    <div class="col-sm-12 col-md-5">
                        <div class="content-box">
                            <div class="box-head">
                                Product Options
                            </div>
                            <div class="box-content">
                                <div class="form-group">
                                    <label class="control-label">Select Size</label>
                                    <select name="size" class="form-control" required>
                                        <option value="">Select Size</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="content-box" style="border: #ddddb9 1px solid;">
                            <div class="box-head" style="background: #fdfdeb;">
                                <i class="fa fa-tags"></i> Special Addon Offer
                            </div>
                            <div class="box-content">
                                <div class="form-group">
                                    <input type="checkbox" id="addon" name="addon" data-value="149" value="1"> <label for="addon" class="control-label">Add a <strong>Surprise Polo Shirt</strong> in your order for just <strong>Rs. 149/-</strong></label>
                                </div>
                                <div class="form-group" id="addon-options" style="display:none;">
                                    <label class="control-label">Select Addon Polo Size</label>
                                    <select name="addon_size" class="form-control" required>
                                        <option value="">Select Addon Size</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="box-head">
                                Your Order
                            </div>
                            <div class="box-content">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th width="20%" class="text-center">
                                            <span class="">Qty</span>
                                        </th>
                                        <th width="30%" class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="vert-align" id="product" data-value="999">Pack of 3 Branded Replica Polo Shirts</td>
                                        <td class="text-center">
                                            <select name="qty" class="form-control form-control-inline" id="qty">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </td>
                                        <td class="text-right vert-align" id="total_price">Rs. 0</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-center">Order Summary</th>
                                    </tr>
                                    <tr>
                                        <td>Delivery Charges:</td>
                                        <input type="hidden" name="delivery" value="0" id="delivery">
                                        <td></td>
                                        <td class="text-right"><strong>Free</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td></td>
                                        <td id="total" class="text-right">Rs. 0</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="content-box">
                            <div class="box-head">
                                Order Form
                            </div>
                            <div id="hloader"></div>
                            <div class="box-content">
                                <div class="form-group">
                                    <label class="" for="name">Full Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email">Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" value="" required email="true">
                                    </div>
                                    </ul>
                                </div>
                                <div class="form-group" id="mobile_main">
                                    <label class="" for="mobile">Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="tel" name="mobile" class="form-control" placeholder="03111124455" minlength="11" maxlength="12" value="" required number="true">
                                    </div>
                                    <a href="#" id="alt_no">Add alternative number</a>
                                </div>
                                <div class="form-group">
                                    <label class="" for="address">Delivery Address</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-truck"></i></div>
                                        <textarea name="address" id="address" class="form-control" cols="30" rows="3" minlength="30" placeholder="Delivery Address" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="" for="city">City</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <select name="city" data-placeholder="Select City" class="form-control" required>
                                            <option value="">Select City</option>
                                            <option value="18 Hazari">18 Hazari</option>
                                            <option value="Abbottabad">Abbottabad</option>
                                            <option value="Abdul Hakim">Abdul Hakim</option>
                                            <option value="Adda Bun Bosan">Adda Bun Bosan</option>
                                            <option value="Adda Lar">Adda Lar</option>
                                            <option value="Adda Zakheera">Adda Zakheera</option>
                                            <option value="Ahmed Pur East">Ahmed Pur East</option>
                                            <option value="Ahmed Pur Lamma">Ahmed Pur Lamma</option>
                                            <option value="Ahmed Pur Sial ">Ahmed Pur Sial </option>
                                            <option value="Ali Pur Chatta">Ali Pur Chatta</option>
                                            <option value="Alipur">Alipur</option>
                                            <option value="Aminpur Banglow">Aminpur Banglow</option>
                                            <option value="Arif Wala">Arif Wala</option>
                                            <option value="Attock">Attock</option>
                                            <option value="Awaran">Awaran</option>
                                            <option value="Badin">Badin</option>
                                            <option value="Bagh">Bagh</option>
                                            <option value="Bahawalnagar">Bahawalnagar</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                            <option value="Bajwar ">Bajwar </option>
                                            <option value="Balkasar">Balkasar</option>
                                            <option value="Banglow Gogera">Banglow Gogera</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Bara Kahu">Bara Kahu</option>
                                            <option value="Barkhan">Barkhan</option>
                                            <option value="Barnala">Barnala</option>
                                            <option value="Basir Pur">Basir Pur</option>
                                            <option value="Batkhela">Batkhela</option>
                                            <option value="Battgram">Battgram</option>
                                            <option value="Bela">Bela</option>
                                            <option value="Bhai Pharu">Bhai Pharu</option>
                                            <option value="Bhakkar">Bhakkar</option>
                                            <option value="Bhalwal">Bhalwal</option>
                                            <option value="Bhawana">Bhawana</option>
                                            <option value="Bhera">Bhera</option>
                                            <option value="Bhimber">Bhimber</option>
                                            <option value="Bhiria City">Bhiria City</option>
                                            <option value="Bhiria Road">Bhiria Road</option>
                                            <option value="Bhit Shah">Bhit Shah</option>
                                            <option value="Buchiana Mandi">Buchiana Mandi</option>
                                            <option value="Budhla Sant">Budhla Sant</option>
                                            <option value="Bunair">Bunair</option>
                                            <option value="Burewala">Burewala</option>
                                            <option value="Chachro">Chachro</option>
                                            <option value="Chak Jhumra">Chak Jhumra</option>
                                            <option value="Chak Sawari">Chak Sawari</option>
                                            <option value="Chakwal">Chakwal</option>
                                            <option value="Chaman">Chaman</option>
                                            <option value="Charsadda">Charsadda</option>
                                            <option value="Chashma">Chashma</option>
                                            <option value="Chawinda">Chawinda</option>
                                            <option value="Chenab Nagar">Chenab Nagar</option>
                                            <option value="Chichawatni">Chichawatni</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Chishtian">Chishtian</option>
                                            <option value="Chitral">Chitral</option>
                                            <option value="Choa Syden Shah">Choa Syden Shah</option>
                                            <option value="Chor Cantt">Chor Cantt</option>
                                            <option value="Chowk Azam">Chowk Azam</option>
                                            <option value="Chowk Sarwar Shaheed">Chowk Sarwar Shaheed</option>
                                            <option value="Chunian">Chunian</option>
                                            <option value="Dadu">Dadu</option>
                                            <option value="Dadyal">Dadyal</option>
                                            <option value="Daharki">Daharki</option>
                                            <option value="Dahranwala">Dahranwala</option>
                                            <option value="Dakota">Dakota</option>
                                            <option value="Dalbandin">Dalbandin</option>
                                            <option value="Dara Adm Khel">Dara Adm Khel</option>
                                            <option value="Dargai">Dargai</option>
                                            <option value="Dary Khan">Dary Khan</option>
                                            <option value="Daska">Daska</option>
                                            <option value="Daud Khel">Daud Khel</option>
                                            <option value="Daulatpur">Daulatpur</option>
                                            <option value="Depal Pur">Depal Pur</option>
                                            <option value="Dera Allahyar">Dera Allahyar</option>
                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                            <option value="Dera Murad Jamali">Dera Murad Jamali</option>
                                            <option value="Dhanot">Dhanot</option>
                                            <option value="Dhodhak">Dhodhak</option>
                                            <option value="Digri">Digri</option>
                                            <option value="Dijkot">Dijkot</option>
                                            <option value="Dina">Dina</option>
                                            <option value="Dinga">Dinga</option>
                                            <option value="Dokri">Dokri</option>
                                            <option value="Dolat Nagar">Dolat Nagar</option>
                                            <option value="Dour">Dour</option>
                                            <option value="Dukki">Dukki</option>
                                            <option value="Dulle Wala">Dulle Wala</option>
                                            <option value="Dunya Pur">Dunya Pur</option>
                                            <option value="Ellah Abad">Ellah Abad</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Faqirwali">Faqirwali</option>
                                            <option value="Farroqabad">Farroqabad</option>
                                            <option value="Fateh Jang">Fateh Jang</option>
                                            <option value="Fatehpur">Fatehpur</option>
                                            <option value="Fazil Pur">Fazil Pur</option>
                                            <option value="Feroz Watowan">Feroz Watowan</option>
                                            <option value="Feroza">Feroza</option>
                                            <option value="Ferozewala">Ferozewala</option>
                                            <option value="Forte Abbas">Forte Abbas</option>
                                            <option value="Gadoon Amazai">Gadoon Amazai</option>
                                            <option value="Gaggo Mandi">Gaggo Mandi</option>
                                            <option value="Gambat">Gambat</option>
                                            <option value="Garh Mor">Garh Mor</option>
                                            <option value="Gari Khairo">Gari Khairo</option>
                                            <option value="Gari Yasin">Gari Yasin</option>
                                            <option value="Gawadar">Gawadar</option>
                                            <option value="Ghakar ">Ghakar </option>
                                            <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                            <option value="Gharo">Gharo</option>
                                            <option value="Ghazi Abad">Ghazi Abad</option>
                                            <option value="Ghotki">Ghotki</option>
                                            <option value="Ghous Pur">Ghous Pur</option>
                                            <option value="Gilgit">Gilgit</option>
                                            <option value="Gojra">Gojra</option>
                                            <option value="Golarchi">Golarchi</option>
                                            <option value="Guddu">Guddu</option>
                                            <option value="Gujarkhan">Gujarkhan</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Hajira">Hajira</option>
                                            <option value="Hala">Hala</option>
                                            <option value="Hangu">Hangu</option>
                                            <option value="Haripur">Haripur</option>
                                            <option value="Harnouli">Harnouli</option>
                                            <option value="Haroonabad">Haroonabad</option>
                                            <option value="Hasilpur">Hasilpur</option>
                                            <option value="Hassan Abdal">Hassan Abdal</option>
                                            <option value="Hatter">Hatter</option>
                                            <option value="Havellian">Havellian</option>
                                            <option value="Hazro">Hazro</option>
                                            <option value="Hub">Hub</option>
                                            <option value="Hujra Shamuqeem">Hujra Shamuqeem</option>
                                            <option value="Humak">Humak</option>
                                            <option value="Hunza">Hunza</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Iqbal Nagar">Iqbal Nagar</option>
                                            <option value="Iskandarabad">Iskandarabad</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Islamkot">Islamkot</option>
                                            <option value="Issa Khel">Issa Khel</option>
                                            <option value="Jacobabad">Jacobabad</option>
                                            <option value="Jalal Pur Bhattian">Jalal Pur Bhattian</option>
                                            <option value="Jalalpur Jattan">Jalalpur Jattan</option>
                                            <option value="Jalalpurpirwala">Jalalpurpirwala</option>
                                            <option value="Jamaldin Wali">Jamaldin Wali</option>
                                            <option value="Jampur">Jampur</option>
                                            <option value="Jamshoro">Jamshoro</option>
                                            <option value="Jand Wala">Jand Wala</option>
                                            <option value="Jaranwala">Jaranwala</option>
                                            <option value="Jarwar">Jarwar</option>
                                            <option value="Jatoi">Jatoi</option>
                                            <option value="Jawarian">Jawarian</option>
                                            <option value="Jhang">Jhang</option>
                                            <option value="Jhangira">Jhangira</option>
                                            <option value="Jhanian">Jhanian</option>
                                            <option value="Jhat Pat">Jhat Pat</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Jouharabad">Jouharabad</option>
                                            <option value="Kabir Wala">Kabir Wala</option>
                                            <option value="Kacha Kho">Kacha Kho</option>
                                            <option value="Kahota">Kahota</option>
                                            <option value="Kala Bagh">Kala Bagh</option>
                                            <option value="Kala Shah Kaku">Kala Shah Kaku</option>
                                            <option value="Kalar Kahar">Kalar Kahar</option>
                                            <option value="Kalat">Kalat</option>
                                            <option value="Kaloor Kot">Kaloor Kot</option>
                                            <option value="Kamalia">Kamalia</option>
                                            <option value="Kambar Ali Khan">Kambar Ali Khan</option>
                                            <option value="Kamer Moshani">Kamer Moshani</option>
                                            <option value="Kamoke">Kamoke</option>
                                            <option value="Kamra">Kamra</option>
                                            <option value="Kana Nau">Kana Nau</option>
                                            <option value="Kandh Kot">Kandh Kot</option>
                                            <option value="Kandiari">Kandiari</option>
                                            <option value="Kandyaro">Kandyaro</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Karianwala">Karianwala</option>
                                            <option value="Karor Lalesan">Karor Lalesan</option>
                                            <option value="Karor Pakka">Karor Pakka</option>
                                            <option value="Kashmore">Kashmore</option>
                                            <option value="Kasowal">Kasowal</option>
                                            <option value="Kasur">Kasur</option>
                                            <option value="Katlang">Katlang</option>
                                            <option value="Khaipur Tamewal">Khaipur Tamewal</option>
                                            <option value="Khairpur">Khairpur</option>
                                            <option value="Khairpur Nathan">Khairpur Nathan</option>
                                            <option value="Khan Bela">Khan Bela</option>
                                            <option value="Khanewal">Khanewal</option>
                                            <option value="Khangarh">Khangarh</option>
                                            <option value="Khanpur">Khanpur</option>
                                            <option value="Khanqa Sharif">Khanqa Sharif</option>
                                            <option value="Khaplu">Khaplu</option>
                                            <option value="Kharan">Kharan</option>
                                            <option value="Kharian">Kharian</option>
                                            <option value="Kharian Cantt">Kharian Cantt</option>
                                            <option value="Khazakhela">Khazakhela</option>
                                            <option value="Khewra Dandot">Khewra Dandot</option>
                                            <option value="Khidder Wala">Khidder Wala</option>
                                            <option value="Khipro">Khipro</option>
                                            <option value="Khurrianwala">Khurrianwala</option>
                                            <option value="Khushab">Khushab</option>
                                            <option value="Khuzdar">Khuzdar</option>
                                            <option value="Kohat">Kohat</option>
                                            <option value="Kot Abdul Malik">Kot Abdul Malik</option>
                                            <option value="Kot Addu">Kot Addu</option>
                                            <option value="Kot Chutta">Kot Chutta</option>
                                            <option value="Kot Ghulam Muhd">Kot Ghulam Muhd</option>
                                            <option value="Kot Mitthan">Kot Mitthan</option>
                                            <option value="Kot Momin ">Kot Momin </option>
                                            <option value="Kot Radha Kisha">Kot Radha Kisha</option>
                                            <option value="Kot Samabah">Kot Samabah</option>
                                            <option value="Kothiala">Kothiala</option>
                                            <option value="Kotla">Kotla</option>
                                            <option value="Kotla Jam">Kotla Jam</option>
                                            <option value="Kotli A.J.K">Kotli A.J.K</option>
                                            <option value="Kotri">Kotri</option>
                                            <option value="Kundian">Kundian</option>
                                            <option value="Kunri">Kunri</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Laki Marwat">Laki Marwat</option>
                                            <option value="Lalamusa">Lalamusa</option>
                                            <option value="Lalian">Lalian</option>
                                            <option value="Landikotal">Landikotal</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Layyah">Layyah</option>
                                            <option value="Liaquatpur">Liaquatpur</option>
                                            <option value="Lodhran">Lodhran</option>
                                            <option value="Lora Lai">Lora Lai</option>
                                            <option value="Machi Goth">Machi Goth</option>
                                            <option value="Mailsi">Mailsi</option>
                                            <option value="Makhdoom Aali">Makhdoom Aali</option>
                                            <option value="Malak Wal">Malak Wal</option>
                                            <option value="Malakand">Malakand</option>
                                            <option value="Mamun Kanjan">Mamun Kanjan</option>
                                            <option value="Manawala">Manawala</option>
                                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                            <option value="Mandi Faiz Abad">Mandi Faiz Abad</option>
                                            <option value="Mandra">Mandra</option>
                                            <option value="Mandranwala">Mandranwala</option>
                                            <option value="Manga Mandi">Manga Mandi</option>
                                            <option value="Mangat">Mangat</option>
                                            <option value="Mangla">Mangla</option>
                                            <option value="Mangla Cantonment">Mangla Cantonment</option>
                                            <option value="Mangowal">Mangowal</option>
                                            <option value="Mankera">Mankera</option>
                                            <option value="Manshera">Manshera</option>
                                            <option value="Mardan">Mardan</option>
                                            <option value="Mastung">Mastung</option>
                                            <option value="Matiari">Matiari</option>
                                            <option value="Matli">Matli</option>
                                            <option value="Mehar">Mehar</option>
                                            <option value="Mehmoodkot">Mehmoodkot</option>
                                            <option value="Mehrab Pur">Mehrab Pur</option>
                                            <option value="Mian Chanoo">Mian Chanoo</option>
                                            <option value="Mianwali">Mianwali</option>
                                            <option value="Minchanabad">Minchanabad</option>
                                            <option value="Minchanabad">Minchanabad</option>
                                            <option value="Mingora">Mingora</option>
                                            <option value="Mirpur A.J.K.">Mirpur A.J.K.</option>
                                            <option value="Mirpur Khas">Mirpur Khas</option>
                                            <option value="Mirpur Mathelo">Mirpur Mathelo</option>
                                            <option value="Mirpur Sakro ">Mirpur Sakro </option>
                                            <option value="Mirwah Gorchani">Mirwah Gorchani</option>
                                            <option value="Mithi">Mithi</option>
                                            <option value="Mityari">Mityari</option>
                                            <option value="Mona Depot">Mona Depot</option>
                                            <option value="More Khunda">More Khunda</option>
                                            <option value="Moro">Moro</option>
                                            <option value="Mubarak Pur">Mubarak Pur</option>
                                            <option value="Much">Much</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Murid Wala">Murid Wala</option>
                                            <option value="Muridkey">Muridkey</option>
                                            <option value="Murree">Murree</option>
                                            <option value="Muslim Bagh">Muslim Bagh</option>
                                            <option value="Muzaffarabad A.J.K">Muzaffarabad A.J.K</option>
                                            <option value="Muzaffargarh">Muzaffargarh</option>
                                            <option value="Nankana Sahib">Nankana Sahib</option>
                                            <option value="Narowal">Narowal</option>
                                            <option value="Narwala Bangla">Narwala Bangla</option>
                                            <option value="Nasirabad">Nasirabad</option>
                                            <option value="Nathia Gali">Nathia Gali</option>
                                            <option value="Nauabad">Nauabad</option>
                                            <option value="Naudero">Naudero</option>
                                            <option value="Naushera">Naushera</option>
                                            <option value="Nawabshah">Nawabshah</option>
                                            <option value="New Jatoi">New Jatoi</option>
                                            <option value="New Saeedabad">New Saeedabad</option>
                                            <option value="Noorpur">Noorpur</option>
                                            <option value="Noshki">Noshki</option>
                                            <option value="Nowshera">Nowshera</option>
                                            <option value="Nowshera Virka">Nowshera Virka</option>
                                            <option value="Noshero Feroz">Noshero Feroz</option>
                                            <option value="Nurpur Thal">Nurpur Thal</option>
                                            <option value="Oghi">Oghi</option>
                                            <option value="Okara">Okara</option>
                                            <option value="Okara Cantt">Okara Cantt</option>
                                            <option value="Pabbi">Pabbi</option>
                                            <option value="Pahar Pur">Pahar Pur</option>
                                            <option value="Painsra">Painsra</option>
                                            <option value="Pak Pattan Shar">Pak Pattan Shar</option>
                                            <option value="Palandri">Palandri</option>
                                            <option value="Panjgoor">Panjgoor</option>
                                            <option value="Pannu Akil">Pannu Akil</option>
                                            <option value="Panu Aqil Cantt">Panu Aqil Cantt</option>
                                            <option value="Pasni">Pasni</option>
                                            <option value="Pasroor">Pasroor</option>
                                            <option value="Pattoki">Pattoki</option>
                                            <option value="Peshawar">Peshawar</option>
                                            <option value="Petaro">Petaro</option>
                                            <option value="Phalia ">Phalia </option>
                                            <option value="Pind Dadan Khan">Pind Dadan Khan</option>
                                            <option value="Pindi Bhatian">Pindi Bhatian</option>
                                            <option value="Pindi Gheb">Pindi Gheb</option>
                                            <option value="Piplan">Piplan</option>
                                            <option value="Pir Mahal">Pir Mahal</option>
                                            <option value="Piryalo">Piryalo</option>
                                            <option value="Pishin">Pishin</option>
                                            <option value="Qaboola">Qaboola</option>
                                            <option value="Qadirpur Rawan">Qadirpur Rawan</option>
                                            <option value="Qalandarabad">Qalandarabad</option>
                                            <option value="Qazi Ahmed">Qazi Ahmed</option>
                                            <option value="Qila Dedar Sing">Qila Dedar Sing</option>
                                            <option value="Quaidabad">Quaidabad</option>
                                            <option value="Quetta">Quetta</option>
                                            <option value="Rabwah">Rabwah</option>
                                            <option value="Radhan Station">Radhan Station</option>
                                            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                            <option value="Rahwali">Rahwali</option>
                                            <option value="Raiwand">Raiwand</option>
                                            <option value="Raiwand">Raiwand</option>
                                            <option value="Rajana">Rajana</option>
                                            <option value="Rajanpur">Rajanpur</option>
                                            <option value="Ranipur">Ranipur</option>
                                            <option value="Ratto Dero">Ratto Dero</option>
                                            <option value="Rawalakot">Rawalakot</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Rawat">Rawat</option>
                                            <option value="Renala Khurd">Renala Khurd</option>
                                            <option value="Risalpur">Risalpur</option>
                                            <option value="Rohri">Rohri</option>
                                            <option value="Sadiqabad">Sadiqabad</option>
                                            <option value="Sahiwal">Sahiwal</option>
                                            <option value="Saidu Sharif">Saidu Sharif</option>
                                            <option value="Sakardu">Sakardu</option>
                                            <option value="Sakrand">Sakrand</option>
                                            <option value="Samaro">Samaro</option>
                                            <option value="Sambrial">Sambrial</option>
                                            <option value="Samundri">Samundri</option>
                                            <option value="Sanawan">Sanawan</option>
                                            <option value="Sanghar">Sanghar</option>
                                            <option value="Sangla Hill">Sangla Hill</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Satiana Bangla">Satiana Bangla</option>
                                            <option value="Sehwan">Sehwan</option>
                                            <option value="Serai Naurang">Serai Naurang</option>
                                            <option value="Shabqadar">Shabqadar</option>
                                            <option value="Shahdad Kot">Shahdad Kot</option>
                                            <option value="Shahdadpur">Shahdadpur</option>
                                            <option value="Shahdara">Shahdara</option>
                                            <option value="Shahkot">Shahkot</option>
                                            <option value="Shakar Garh">Shakar Garh</option>
                                            <option value="Shangla">Shangla</option>
                                            <option value="Sharaqpur">Sharaqpur</option>
                                            <option value="Sheikhupura">Sheikhupura</option>
                                            <option value="Shikarpur">Shikarpur</option>
                                            <option value="Shinkiari">Shinkiari</option>
                                            <option value="Shorkot">Shorkot</option>
                                            <option value="Shujabad">Shujabad</option>
                                            <option value="Sialkot">Sialkot</option>
                                            <option value="Sibi">Sibi</option>
                                            <option value="Silanwali ">Silanwali </option>
                                            <option value="Sinjhoro">Sinjhoro</option>
                                            <option value="Sita Road">Sita Road</option>
                                            <option value="Sohawa">Sohawa</option>
                                            <option value="Srai Alamgeer">Srai Alamgeer</option>
                                            <option value="Sui">Sui</option>
                                            <option value="Sujawal">Sujawal</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Sultan kot">Sultan kot</option>
                                            <option value="Sultan pur">Sultan pur</option>
                                            <option value="Sumbrial">Sumbrial</option>
                                            <option value="Sundar Adda">Sundar Adda</option>
                                            <option value="Swabi">Swabi</option>
                                            <option value="Swat">Swat</option>
                                            <option value="Takhat Bai ">Takhat Bai </option>
                                            <option value="Talagang">Talagang</option>
                                            <option value="Tall">Tall</option>
                                            <option value="Tandlianwala">Tandlianwala</option>
                                            <option value="Tando Adam">Tando Adam</option>
                                            <option value="Tando Allayar">Tando Allayar</option>
                                            <option value="Tando Bagho">Tando Bagho</option>
                                            <option value="Tando Jam">Tando Jam</option>
                                            <option value="Tando Mohd Khan">Tando Mohd Khan</option>
                                            <option value="Tank">Tank</option>
                                            <option value="Tarbela">Tarbela</option>
                                            <option value="Tarnol">Tarnol</option>
                                            <option value="Taunsa Sharif">Taunsa Sharif</option>
                                            <option value="Taxila">Taxila</option>
                                            <option value="Temargarah">Temargarah</option>
                                            <option value="Ternol">Ternol</option>
                                            <option value="Tharo Shah">Tharo Shah</option>
                                            <option value="Thatta">Thatta</option>
                                            <option value="Thull">Thull</option>
                                            <option value="Tibba Sultan">Tibba Sultan</option>
                                            <option value="Toba Tek Singh">Toba Tek Singh</option>
                                            <option value="Topi">Topi</option>
                                            <option value="Turbat">Turbat</option>
                                            <option value="Ubaro">Ubaro</option>
                                            <option value="Uch Sharif">Uch Sharif</option>
                                            <option value="Umerkot">Umerkot</option>
                                            <option value="Upper Dir">Upper Dir</option>
                                            <option value="Usta Mohammad">Usta Mohammad</option>
                                            <option value="Uthal">Uthal</option>
                                            <option value="Vari Dir">Vari Dir</option>
                                            <option value="Vehari">Vehari</option>
                                            <option value="Wah Cantt">Wah Cantt</option>
                                            <option value="Wan Bachran">Wan Bachran</option>
                                            <option value="Warah">Warah</option>
                                            <option value="Wazirabad">Wazirabad</option>
                                            <option value="Winder">Winder</option>
                                            <option value="Yazman Mandi">Yazman Mandi</option>
                                            <option value="Zafarwal">Zafarwal</option>
                                            <option value="Zahirpeer">Zahirpeer</option>
                                            <option value="Zhob">Zhob</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xlg btn-block no-radius" id="place_order">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div></div>
@endsection

