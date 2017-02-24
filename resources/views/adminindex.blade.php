@extends('layouts.admin')

@section('head')
   
@endsection

@section('content')
     <div style="background-color: #FFFFFF">
         <h2>ข้อมูลวัด</h2>
                <table style="width:75%">
                  <tr>
                    <th>ชื่อวัด:</th>
                    <td>วัดอุโมงค์(สวนพุทธธรรม)</td>
                    <td rowspan="6"><input type="button" name="edit" value="แก้ไข"></td>  
                  </tr>
                  <tr>
                    <th>ที่อยู่วัด:</th>
                    <td>ต.สุเทพ อ.เมือง จ.เชียงใหม่</td>
                  </tr>
                  <tr>
                    <th>ลักษณะเด่น:</th>
                    <td>ภาพจิตกรรมภายในอุโมงค์และสีสันในจิตกรรม รวมถึงเจดีย์ในวัดอุโมงค์</td>
                  </tr>
                  <tr>
                    <th>ประวัติ:</th>
                    <td>“สวนพุทธรรม” เป็นชื่อใหม่ที่ ภิกขุ ปัญญานันทะ ประธานวัดอุโมงค์ ในสมัยนั้น (2492 – 2509) ตั้งขึ้นเรียกสถานที่ป่าผืนใหญ่ที่ปกคลุมวัดร้างโบราณซึ่งมีทั้งหมดประมาณ 150 ไร่</td>
                  </tr>
                  <tr>
                    <th>ละติจูด:</th>
                    <td>18.782837</td>
                  </tr>
                  <tr>
                    <th>ลองติจูด:</th>
                    <td>98.951132</td>
                  </tr>
                </table>
        </body>

@endsection

@section('footer')

@endsection






