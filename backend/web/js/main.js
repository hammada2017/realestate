$(document).ready(function(){
    var typeId;
    $('select#realestate-realestate_type_id').change(function(){
        typeId = $(this).val();
        switch(typeId){
            case '1':
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': ''});
                $('.field-realestate-flats_number').css({'display': 'none'});
                break;
            case '2':
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': ''});
                $('.field-realestate-flats_number, .field-realestate-store_number').css({'display': 'none'});
                break;
            case '3':
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': ''});
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number').css({'display': 'none'});
                break;
            case '4':
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': ''});
                $('.field-realestate-hols_number, .field-realestate-store_number, .field-realestate-flats_number').css({'display': 'none'});
                break;
            case '5':
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': ''});
                $('.field-realestate-rooms_number, .field-realestate-hols_number, .field-realestate-pathrooms_number, .field-realestate-store_number, .field-realestate-realestate_age, .field-realestate-flats_number').css({'display': 'none'});
                break;
            default:
                alert('unknown!');
        }
    });

    $('select#realestate-ads_type_id').change(function(){
        var adsType = $(this).val();
        if(adsType == '1'){
            $('.field-realestate-realestate_recuretment_period').css({'display': 'none'});
        }else{
            $('.field-realestate-realestate_recuretment_period').css({'display': ''});
        }
    });
});