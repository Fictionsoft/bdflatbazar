<div id="center-column">
  <div class="table">
    <img src="assets/images/admin/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="assets/images/admin/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open_multipart('admin/post/save'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <th class="full" colspan="2">Post Requirement Entry</th>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" style="width: 290px;" value="<?php if (!empty($post)) {
      echo $post['name'];
    } ?>" /></td>
        </tr>
        <tr>
          <td>Cell</td>
          <td><input type="text" name="cell" style="width: 290px;" value="<?php if (!empty($post)) {
      echo $post['cell'];
    } ?>" /></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" style="width: 290px;" value="<?php if (!empty($post)) {
      echo $post['phone'];
    } ?>" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" style="width: 290px;" value="<?php if (!empty($post)) {
      echo $post['email'];
    } ?>" /></td>
        </tr>
        <tr>
          <td width="130">
            I Want to
          </td>
          <td>
            <select style="width:83px;" name="type">
              <option value="Buy">Buy</option>
              <option value="Sell">Sell</option>
              <option value="Joint Venture">Joint Venture</option>
              <option value="Rent">Rent</option>
              <option value="Rent Out">Rent Out</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Property Type</td>
          <td>
            <select name="place">
              <option value="Residential Apartment">Residential Apartment</option>
              <option value="Furnished Apartment">Furnished Apartment</option>
              <option value="Apartment for Office">Apartment for Office</option>
              <option value="Commercial Space">Commercial Space</option>
              <option value="Independent House">Independent House</option>
              <option value="Sublet With Familiy">Sublet With Family</option>
              <option value="Mess">Mess</option>
              <option value="Garage">Garage</option>
              <option value="Storage">Storage</option>
              <option value="Shop">Shop/Showroom</option>
              <option value="Plot">Plot/Land</option>
              <option value="Studio type Apartment">Studio type Apartment</option>
              <option value="Other residential Apartment">Other residential Apartment</option>
              <option value="Other commercial office">Other commercial office</option>
              <option value="Industrial land">Industrial land</option>
              <option value="Factory">Factory</option>
              <option value="Time Share">Time Share</option>
              <option value="Others">Others</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2"><b>In location</b></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="title" style="width: 290px;" value="<?php if (!empty($post)) {
      echo $post['email'];
    } ?>" /></td>
        </tr>
        <tr>
          <td valign="top">Details</td>
          <td><textarea style="height:150px;width:290px;" name="details"><?php if (!empty($post)) {
      echo $post['details'];
    } ?></textarea></td>
        </tr>
        <tr>
          <td>District</td>
          <td>
            <select style="width:190px;" name="district">
              <option value="">Select District</option>
              <option value="Barisal">Barisal</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Dhaka">Dhaka</option>
              <option value="Khulna">Khulna</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Sylhet">Sylhet</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Area</td>
          <td>
            <select style="width:190px;" name="area">
              <option value="">Select Area</option>
              <option value="Adabor">Adabor</option>
              <option value="Aftab Nagar">Aftab Nagar</option>
              <option value="Agargaon">Agargaon</option>
              <option value="Azimpur">Azimpur</option>
              <option value="Badda">Badda</option>
              <option value="Banani">Banani</option>
              <option value="Banashree">Banashree</option>
              <option value="Banglabazar">Banglabazar</option>
              <option value="54">Banglamotor</option>
              <option value="4">Baridhara</option>
              <option value="55">Basabo</option>
              <option value="9">Bashundhara</option>
              <option value="74">Bishow Road</option>
              <option value="24">Cantonment</option>
              <option value="67">Central Road</option>
              <option value="90">Chamilibagh</option>
              <option value="15">Demra</option>
              <option value="25">Dhamrai</option>
              <option value="26">Dhamrai</option>
              <option value="7">Dhanmondi</option>
              <option value="27">Dohar</option>
              <option value="37">DOHS Banani</option>
              <option value="5">DOHS Baridhara</option>
              <option value="84">DOHS Mirpur</option>
              <option value="36">DOHS Mohakhali</option>
              <option value="66">Elephent Road</option>
              <option value="71">Eskaton</option>
              <option value="216">Faridpur</option>
              <option value="75">Farmgate</option>
              <option value="85">Gandaria</option>
              <option value="217">Gazipur</option>
              <option value="218">Gopalganj</option>
              <option value="8">Green Road</option>
              <option value="91">Gulshan 1</option>
              <option value="2">Gulshan 2</option>
              <option value="407">Halishahor</option>
              <option value="38">Hazaribag</option>
              <option value="39">Islampur</option>
              <option value="219">Jamalpur</option>
              <option value="40">Jatrabari</option>
              <option value="41">Kafrul</option>
              <option value="16">Kakrail</option>
              <option value="19">Kalabagan</option>
              <option value="81">Kallyanpur</option>
              <option value="83">Kamalapur</option>
              <option value="82">Kawlar</option>
              <option value="80">Kawran Bazar</option>
              <option value="43">Kazipara</option>
              <option value="28">Keraniganj</option>
              <option value="73">Khilgoan</option>
              <option value="49">Khilkhet</option>
              <option value="220">Kishoreganj</option>
              <option value="29">Kotwali</option>
              <option value="30">Lalbagh</option>
              <option value="18">Lalmatia</option>
              <option value="221">Madaripur</option>
              <option value="10">Malibagh</option>
              <option value="222">Manikganj</option>
              <option value="89">Mirpur</option>
              <option value="44">Mirpur - 1</option>
              <option value="46">Mirpur - 10</option>
              <option value="13">Mirpur - 11</option>
              <option value="48">Mirpur - 12</option>
              <option value="47">Mirpur - 14</option>
              <option value="45">Mirpur - 2</option>
              <option value="68">Mirpur - 6</option>
              <option value="418">Mirpur-13</option>
              <option value="70">Moghbazar</option>
              <option value="58">Mohakhali</option>
              <option value="11">Mohammadpur</option>
              <option value="86">Mohammodi Housing</option>
              <option value="78">Monipuri Para</option>
              <option value="31">Motijheel</option>
              <option value="57">Mouchak</option>
              <option value="223">Munshiganj</option>
              <option value="224">Mymensingh</option>
              <option value="56">Nakhalpara</option>
              <option value="225">Narayanganj</option>
              <option value="226">Narsingdi</option>
              <option value="32">Nawabganj</option>
              <option value="79">Nawabpur</option>
              <option value="227">Netrokona</option>
              <option value="76">Niketan</option>
              <option value="59">Nikunja</option>
              <option value="69">Pallobi</option>
              <option value="21">Panthapath</option>
              <option value="77">Paribagh</option>
              <option value="405">Purbachal</option>
              <option value="228">Rajbari</option>
              <option value="413">Rajshahi</option>
              <option value="88">Ramna</option>
              <option value="14">Rampura</option>
              <option value="20">Rayer Bazar</option>
              <option value="33">Savar</option>
              <option value="60">Segunbagicha</option>
              <option value="65">Shajahanpur</option>
              <option value="42">Shamoly</option>
              <option value="22">Shantinagar</option>
              <option value="229">Shariatpur</option>
              <option value="230">Sherpur</option>
              <option value="61">Shewrapara</option>
              <option value="87">Siddeshwari</option>
              <option value="63">Siddquebazar</option>
              <option value="34">Sutrapur</option>
              <option value="62">Taltala</option>
              <option value="231">Tangail</option>
              <option value="35">Tejgaon</option>
              <option value="17">Tongi</option>
              <option value="6">Uttara</option>
              <option value="64">Wari</option>
              <option value="23">Zigatala</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td style="padding-bottom: 5px; text-align: left; vertical-align: middle;">
            <input type="submit" value="Submit" name="submit">
          </td>
        </tr>
      </tbody>
    </table>
<?php
if (!empty($post)) {
  echo form_hidden('id', $post['id']);
}

echo form_close();
?>
    <p>&nbsp;</p>
  </div>
</div>