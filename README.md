# remove special characters from a string
In php, removing special characters from text that includes Persian or English letters or numbers
************************
حذف کاراکترهای خاص از متنی که شامل حروف فارسی، انگلیسی، اعدادو ... هست

 $input = "ABCdfg_#@!-ا ب پ ت_12344";
 
 $output = preg_replace('/[^پتثجچحخدذرزژسشصضطظعغفقکگلمنوهی0-9a-zA-Z0-9]/s', '', $input); // "ABCdfgابپت12344"
