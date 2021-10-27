
//---------------------------------------------------------      -------------------------------------------------------
//-----------------------------------------------------------FR---------------------------------------------------------
//---------------------------------------------------------      -------------------------------------------------------
$(document).on('change','#GouvernoratFr',function(){
    switch ($("#GouvernoratFr").val()){

case  "Ariana" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Ariana Medina"  >Ariana Medina </option> 
<option value="Ettadhamen"  >Ettadhamen </option> 
<option value="Kalaat El Andalous"  >Kalaat El Andalous </option> 
<option value="Mnihla"  >Mnihla </option> 
<option value="Raoued"  >Raoued </option> 
<option value="Sidi Thabet"  >Sidi Thabet </option> 
<option value="Soukra"  >Soukra </option> 
`)
break;
case "Tunis" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bab Bhar"  >Bab Bhar </option> 
<option value="Bab Souika"  >Bab Souika </option> 
<option value="Bardo"  >Bardo </option> 
<option value="berges du lac"  >berges du lac </option> 
<option value="Carthage"  >Carthage </option> 
<option value="Cité El Khadra"  >Cité El Khadra </option> 
<option value="Cité El Tahrir"  >Cité El Tahrir </option> 
<option value="Cité Ezzouhour"  >Cité Ezzouhour </option> 
<option value="El Menzah"  >El Menzah </option> 
<option value="El Ouardia"  >El Ouardia </option> 
<option value="El Kabaria"  >El Kabaria </option> 
<option value="Hrairia"  >Hrairia </option> 
<option value="Jebel Jelloud"  >Jebel Jelloud </option> 
<option value="La Goulette"  >La Goulette </option> 
<option value="La Marsa"  >La Marsa </option> 
<option value="Le Kram"  >Le Kram </option> 
<option value="Medina"  >Medina </option> 
<option value="Omrane"  >Omrane </option> 
<option value="Omrane Superieur"  >Omrane Superieur </option> 
<option value="Sidi El Bechir"  >Sidi El Bechir </option> 
<option value="Sidi Hassine"  >Sidi Hassine </option> 
<option value="Sijoumi"  >Sijoumi </option> `)
break;
case "Ben Arous" : 
$("#DelegationFr").show() 
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Ben Arous"  >Ben Arous </option>
<option value="Boumhel"  >Boumhel </option>
<option value="El Mourouj"  >El Mourouj </option>
<option value="Ezzahra"  >Ezzahra </option> 
<option value="Fouchana"  >Fouchana </option>
<option value="Hammam Chatt"  >Hammam Chatt </option>
<option value="Hammam Lif"  >Hammam Lif </option>
<option value="M'Hamdia"  >M'Hamdia </option>
<option value="Medina Jedida"  >Medina Jedida </option>
<option value="Megrine"  >Megrine </option>
<option value="Mornag"  >Mornag </option>
<option value="Rades"  >Rades </option>
`)
break;
case "Manouba" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Borj El Amri"  >Borj El Amri </option> 
<option value="Douar Hicher"  >Douar Hicher </option> 
<option value="El Battan"  >El Battan </option> 
<option value="Jedaida"  >Jedaida </option> 
<option value="Manouba"  >Manouba </option> 
<option value="Mornaguia"  >Mornaguia </option> 
<option value="Oued Ellil"  >Oued Ellil </option> 
<option value="Tebourba"  >Tebourba </option> 
`)
break;
case"Sousse" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Akouda"  >Akouda </option> 
<option value="Bouficha"  >Bouficha </option> 
<option value="Enfidha"  >Enfidha </option> 
<option value="Hammam Sousse"  >Hammam Sousse </option> 
<option value="Hergla"  >Hergla </option> 
<option value="Kalaa Kebira"  >Kalaa Kebira </option> 
<option value="Kalaa Sghira"  >Kalaa Sghira </option> 
<option value="Kondar"  >Kondar </option> 
<option value="M'Saken"  >M'Saken </option> 
<option value="Sidi Bou Ali"  >Sidi Bou Ali </option> 
<option value="Sidi El Heni"  >Sidi El Heni </option> 
<option value="Sousse Jaouhara"  >Sousse Jaouhara </option> 
<option value="Sousse Medina"  >Sousse Medina </option> 
<option value="Sousse Riadh"  >Sousse Riadh </option> 
<option value="Sousse Sidi Abdelhamid"  >Sousse Sidi Abdelhamid </option> 
<option value="Zaouia Ksiba Thrayat"  >Zaouia Ksiba Thrayat </option> 
`)
break;
case "Sfax" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Agareb"  >Agareb </option>
<option value="Bir Ali Ben Khelifa"  >Bir Ali Ben Khelifa </option>
<option value="El Amra"  >El Amra </option>
<option value="El Ghraiba"  >El Ghraiba </option>
<option value="Hencha"  >Hencha </option>
<option value="Jebeniana"  >Jebeniana </option>
<option value="Kerkennah"  >Kerkennah </option>
<option value="Mahres"  >Mahres </option>
<option value="Menzel Chaker"  >Menzel Chaker </option>
<option value="Sakiet Eddaier"  >Sakiet Eddaier </option>
<option value="Sakiet Ezzit"  >Sakiet Ezzit </option>
<option value="Sfax Medina"  >Sfax Medina </option>
<option value="Sfax West"  >Sfax West </option>
<option value="Sfax South"  >Sfax South </option>
<option value="Skhira"  >Skhira </option>
<option value="Thyna"  >Thyna </option>
`)
break;
case"Gabes" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Gabes Medina"  >Gabes Medina </option>
<option value="Gabes West"  >Gabes West </option>
<option value="Gabes South"  >Gabes South </option>
<option value="Ghannouch"  >Ghannouch </option>
<option value="Hamma"  >Hamma </option>
<option value="Mareth"  >Mareth </option>
<option value="Matmata"  >Matmata </option>
<option value="New Matmata"  >New Matmata </option>
<option value="Menzel Habib"  >Menzel Habib </option>
<option value="Metouia"  >Metouia </option>
`)
break;
case"Medenine" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Ben Gardane"  >Ben Gardane </option>
<option value="Beni Khedache"  >Beni Khedache </option>
<option value="Djerba Ajim"  >Djerba Ajim </option>
<option value="Djerba Midoun"  >Djerba Midoun </option>
<option value="Djerba Houmt Souk"  >Djerba Houmt Souk </option>
<option value="Medenine North"  >Medenine North </option>
<option value="Medenine South"  >Medenine South </option>
<option value="Sidi Makhlouf"  >Sidi Makhlouf </option>
<option value="Zarzis"  >Zarzis </option>
`)
break;
case "Mahdia" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Boumerdes"  >Boumerdes </option>
<option value="Chebba"  >Chebba </option>
<option value="Chorbane"  >Chorbane </option>
<option value="El Djem"  >El Djem </option>
<option value="Hbira"  >Hbira </option>
<option value="Ksour Essef"  >Ksour Essef </option>
<option value="Mahdia"  >Mahdia </option>
<option value="Melloulech"  >Melloulech </option>
<option value="Ouled Chamekh"  >Ouled Chamekh </option>
<option value="Sidi Alouane"  >Sidi Alouane </option>
<option value="Souassi"  >Souassi </option>
`)
break;
case "Beja" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Amdoun"  >Amdoun </option> 
<option value="Beja North"  >Beja Nord </option> 
<option value="Beja South"  >Beja Sud </option> 
<option value="Goubellat"  >Goubellat </option> 
<option value="Mejez El Bab"  >Mejez El Bab </option> 
<option value="Nefza"  >Nefza </option> 
<option value="Teboursouk"  >Teboursouk </option> 
<option value="Testour"  >Testour </option> 
<option value="Thibar"  >Thibar </option> `)
break;
case "Bizerte" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bizerte North"  >Bizerte North </option>
<option value="Bizerte South"  >Bizerte South </option>
<option value="Djoumime"  >Djoumime </option>
<option value="El Alia"  >El Alia </option>
<option value="Ghar El Melh"  >Ghar El Melh </option>
<option value="Ghezala"  >Ghezala </option>
<option value="Mateur"  >Mateur </option>
<option value="Menzel Bourguiba"  >Menzel Bourguiba </option>
<option value="Menzel Jemil"  >Menzel Jemil </option>
<option value="Ras Jebel"  >Ras Jebel </option>
<option value="Sejenane"  >Sejenane </option>
<option value="Tinja"  >Tinja </option>
<option value="Utique"  >Utique </option>
<option value="Zarzouna"  >Zarzouna </option>
`)
break;
case "Gafsa" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Belkhir"  >Belkhir </option>
<option value="Gafsa North"  >Gafsa North </option>
<option value="Gafsa South"  >Gafsa South </option>
<option value="Guetar"  >Guetar </option>
<option value="Ksar"  >Ksar </option>
<option value="Mdhilla"  >Mdhilla </option>
<option value="Metlaoui"  >Metlaoui </option>
<option value="Oum Larais"  >Oum Larais </option>
<option value="Redeyef"  >Redeyef </option>
<option value="Sened"  >Sened </option>
<option value="Sidi Aich"  >Sidi Aich </option>
<option value="Sidi Boubaker"  >Sidi Boubaker </option>
`)
break;
case "Jendouba" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Aïn Draham"  >Aïn Draham </option>
<option value="Balta"  >Balta </option>
<option value="Bousalem"  >Bousalem </option>
<option value="Fernana"  >Fernana </option>
<option value="Ghardimaou"  >Ghardimaou </option>
<option value="Jendouba"  >Jendouba </option>
<option value="Jendouba Nord"  >Jendouba Nord </option>
<option value="Oued Mliz"  >Oued Mliz </option>
<option value="Tabarka"  >Tabarka </option>
`)
break;
case "Kairouan" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Alaa"  >Alaa </option>
<option value="Bouhajla"  >Bouhajla </option>
<option value="Chebika"  >Chebika </option>
<option value="Chrarda"  >Chrarda </option>
<option value="Haffouz"  >Haffouz </option>
<option value="Hajeb El Ayoun"  >Hajeb El Ayoun </option>
<option value="Kairouan North"  >Kairouan North </option>
<option value="Kairouan South"  >Kairouan South </option>
<option value="Nasrallah"  >Nasrallah </option>
<option value="Oueslatia"  >Oueslatia </option>
<option value="Sbikha"  >Sbikha </option>
`)
break;
case "Kasserine" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Ayoun"  >Ayoun </option>
<option value="Ezzouhour"  >Ezzouhour </option>
<option value="Feriana"  >Feriana </option>
<option value="Foussana"  >Foussana </option>
<option value="Hassi El Ferid"  >Hassi El Ferid </option>
<option value="Hidra"  >Hidra </option>
<option value="Jedeliane"  >Jedeliane </option>
<option value="Kasserine North"  >Kasserine North </option>
<option value="Kasserine South"  >Kasserine South </option>
<option value="Majel Belabbes"  >Majel Belabbes </option>
<option value="Sbeitla"  >Sbeitla </option>
<option value="Sbiba"  >Sbiba </option>
<option value="Thala"  >Thala </option>
`)
break;
case "Kef" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Dahmani"  >Dahmani </option>
<option value="El Sers"  >El Sers </option>
<option value="Jérissa"  >Jérissa </option>
<option value="Kalaat Khasba"  >Kalaat Khasba </option>
<option value="Kalaat Senane"  >Kalaat Senane </option>
<option value="Kef East"  >Kef East </option>
<option value="Kef West"  >Kef West </option>
<option value="Ksour"  >Ksour </option>
<option value="Nebeur"  >Nebeur </option>
<option value="Sakiet Sidi Youssef"  >Sakiet Sidi Youssef </option>
<option value="Tajerouine"  >Tajerouine </option>
<option value="Touiref"  >Touiref </option>
`)
break;
case "Monastir" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bekalta"  >Bekalta </option>
<option value="Bembla"  >Bembla </option>
<option value="Beni Hassen"  >Beni Hassen </option>
<option value="Jammel"  >Jammel </option>
<option value="Ksar Hellal"  >Ksar Hellal </option>
<option value="Ksibet El Mediouni"  >Ksibet El Mediouni </option>
<option value="Moknine"  >Moknine </option>
<option value="Monastir"  >Monastir </option>
<option value="Monastir"  >Monastir </option>
<option value="Sahline"  >Sahline </option>
<option value="Sayada-Lamta-Bou Hjar"  >Sayada-Lamta-Bou Hjar </option>
<option value="Teboulba"  >Teboulba </option>
<option value="Zeramdine"  >Zeramdine </option>
`)
break;
case "Nabeul" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Beni Khalled"  >Beni Khalled </option>
<option value="Beni Khiar"  >Beni Khiar </option>
<option value="Bou Argoub"  >Bou Argoub </option>
<option value="Dar Chaabane El Fehri"  >Dar Chaabane El Fehri </option>
<option value="El Mida"  >El Mida </option>
<option value="Grombalia"  >Grombalia </option>
<option value="Hammam Ghezaz"  >Hammam Ghezaz </option>
<option value="Hammamet"  >Hammamet </option>
<option value="Haouaria"  >Haouaria </option>
<option value="Kelibia"  >Kelibia </option>
<option value="Korba"  >Korba </option>
<option value="Menzel Bouzelfa"  >Menzel Bouzelfa </option>
<option value="Menzel Temime"  >Menzel Temime </option>
<option value="Nabeul"  >Nabeul </option>
<option value="Soliman"  >Soliman </option>
<option value="Takelsa"  >Takelsa </option>
`)
break;
case "Sidi Bou Zid" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bir El Hfay"  >Bir El Hfay </option>
<option value="Jelma"  >Jelma </option>
<option value="Mazzouna"  >Mazzouna </option>
<option value="Meknassi"  >Meknassi </option>
<option value="Menzel Bouzaiene"  >Menzel Bouzaiene </option>
<option value="Ouled Haffouz"  >Ouled Haffouz </option>
<option value="Regueb"  >Regueb </option>
<option value="Sabalat Ouled Asker"  >Sabalat Ouled Asker </option>
<option value="Sidi Ali Ben Aoun"  >Sidi Ali Ben Aoun </option>
<option value="Sidi Bouzid East"  >Sidi Bouzid East </option>
<option value="Sidi Bouzid West"  >Sidi Bouzid West </option>
<option value="Souk Jedid"  >Souk Jedid </option>
`)
break;
case "Siliana" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bargou"  >Bargou </option>
<option value="Bouarada"  >Bouarada </option>
<option value="El Aroussa"  >El Aroussa </option>
<option value="El Krib"  >El Krib </option>
<option value="Gaafour"  >Gaafour </option>
<option value="Kesra"  >Kesra </option>
<option value="Makthar"  >Makthar </option>
<option value="Rouhia"  >Rouhia </option>
<option value="Sidi Bourouis"  >Sidi Bourouis </option>
<option value="Siliana North"  >Siliana North </option>
<option value="Siliana South"  >Siliana South </option>
`)
break;
case "Tataouine" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bir Lahmar"  >Bir Lahmar </option>
<option value="Dhiba"  >Dhiba </option>
<option value="Ghomrassen"  >Ghomrassen </option>
<option value="Remada"  >Remada </option>
<option value="Samar"  >Samar </option>
<option value="Tataouine North"  >Tataouine North </option>
<option value="Tataouine South"  >Tataouine South </option>
`)
break;
case "Tozeur" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Degueche"  >Degueche </option>
<option value="Hazoua"  >Hazoua </option>
<option value="Nefta"  >Nefta </option>
<option value="Tamaghza"  >Tamaghza </option>
<option value="Tozeur"  >Tozeur </option>
`)
break;
case "Zaghouan" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>
<option value="Bir Mchergua"  >Bir Mchergua </option>
<option value="Fahs"  >Fahs </option>
<option value="Nadhour"  >Nadhour </option>
<option value="Saouaf"  >Saouaf </option>
<option value="Zaghouan"  >Zaghouan </option>
<option value="Zriba"  >Zriba </option>
`)
break;
case "Kebili" : 
$("#DelegationFr").show()
$("#DelegationFr").html(`
<option selected value="Delegation"  >Delegation </option>

<option value="Douz North"  >Douz North </option>
<option value="Douz South"  >Douz South </option>
<option value="Faouar"  >Faouar </option>
<option value="Kebili North"  >Kebili North </option>
<option value="Kebili South"  >Kebili South </option>
<option value="Souk El Ahed"  >Souk El Ahed </option>
`)
break;
case 'Gouvernorate':
$("#DelegationFr").hide()
break;
}

})
//---------------- onchange Ar to Fr ---------------------
/*
$("#DelegationAr").on("change",function(){
switch($("#DelegationAr").val)


})*/
$(document).on('change','#GouvernoratAr',function(){
  
    switch ($("#GouvernoratAr").val()){
case  "أريانة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="أريانة المدينة"  >أريانةالمدينة </option>
<option value="حي التضامن"  >حي التضامن </option> 
<option value="رواد"  >رواد </option> 
<option value="سكرة"  >سكرة </option> 
<option value="سيدي ثابت"  >سيدي ثابت </option> 
<option value="قلعة الأندلس"  >قلعة الأندلس </option> 
<option value="المنيهلة"  >المنيهلة </option> 
`)
 break
case "تونس" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="تونس المدينة"  >تونس المدينة </option> 
<option value="باب البحر"  >باب البحر </option> 
<option value="باب السويقة"  >باب السويقة </option> 
<option value="باردو"  >باردو </option> 
<option value="جبل الجلود"  >جبل الجلود </option> 
<option value="حلق الوادي"  >حلق الوادي </option> 
<option value="حي التحرير"  >حي التحرير </option> 
<option value="حي الخضراء"  >حي الخضراء </option> 
<option value="الزهور"  >الزهور </option> 
<option value="سيدي حسين"  >سيدي حسين </option> 
<option value="سيدي البشير"  >سيدي البشير </option> 
<option value="ضفاف البحيرة"  >ضفاف البحيرة </option> 
<option value="قرطاج"  >قرطاج </option> 
<option value="الحرايرية"  >الحرايرية </option> 
<option value="السيجومي"  >السيجومي </option> 
<option value="العمران"  >العمران </option> 
<option value="العمران الأعلى"  >العمران الأعلى </option> 
<option value="الكبارية"  >الكبارية </option> 
<option value="الكرم"  >الكرم </option> 
<option value="المرسى"  >المرسى </option> 
<option value="المنزه"  >المنزه </option> 
<option value="الوردية"  >الوردية </option> 
`)
 break
case "بن عروس" : 
$("#DelegationAr").show() 
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="بن عروس المدينة"  >بن عروس المدينة </option> 
<option value="بومهل البساتين"  >بومهل البساتين </option> 
<option value="حمام الأنف"  >حمام الأنف </option> 
<option value="حمام الشط"  >حمام الشط </option> 
<option value="رادس"  >رادس </option>     
<option value="الزهراء"  >الزهراء </option> 
<option value="فوشانة"  >فوشانة </option> 
<option value="المحمدية"  >المحمدية </option> 
<option value="المدينة الجديدة"  >المدينة الجديدة </option> 
<option value="مرناق"  >مرناق </option> 
<option value="المروج"  >المروج </option> 
<option value="مقرين"  >مقرين </option> 
 `)
 break
case "منوبة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="منوبة المدينة"  >منوبة المدينة </option> 
<option value="برج العامري"  >برج العامري </option> 
<option value="البطان"  >البطان </option> 
<option value="الجديدة"  >الجديدة </option> 
<option value="دوار هيشر"  >دوار هيشر </option> 
<option value="طبربة"  >طبربة </option> 
<option value="المرناقية"  >المرناقية </option> 
<option value="وادي الليل"  >وادي الليل </option> 
`)
 break
case"سوسة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="سوسة المدينة"  >سوسة المدينة </option>
<option value="أكودة"  >أكودة </option> 
<option value="بوفيشة"  >بوفيشة </option>
<option value="جوهرة"  >جوهرة </option>
<option value="حمام سوسة"  >حمام سوسة </option>
<option value="الرياض"  >الرياض </option>
<option value="الزاوية قصيبة الثريات"  >الزاوية قصيبة الثريات </option>
<option value="سيدي بوعلي"  >سيدي بوعلي </option>
<option value="سيدي عبد الحميد"  >سيدي عبد الحميد </option>
<option value="سيدي الهاني"  >سيدي الهاني </option>
<option value="القلعة الصغرى"  >القلعة الصغرى </option>
<option value="القلعة الكبرى"  >القلعة الكبرى </option>
<option value="كندار"  >كندار </option>
<option value="مساكن"  >مساكن </option>
<option value="النفيضة"  >النفيضة </option>
<option value="هرقلة"  >هرقلة </option>

`)
 break
case "صفاقس" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="صفاقس المدينة"  >صفاقس المدينة </option>
<option value="صفاقس الجنوبية"  >صفاقس الجنوبية </option>
<option value="صفاقس الغربية"  >صفاقس الغربية </option>
<option value="بئر علي بن خليفة"  >بئر علي بن خليفة </option>
<option value="جبنيانة"  >جبنيانة </option>
<option value="الحنشة"  >الحنشة </option>
<option value="ساقية الدائر"  >ساقية الدائر </option>
<option value="ساقية الزيت"  >ساقية الزيت </option>
<option value="الصخيرة"  >الصخيرة </option>
<option value="طينة"  >طينة </option>
<option value="العامرة"  >العامرة </option>
<option value="عقارب"  >عقارب </option>
<option value="الغريبة"  >الغريبة </option>
<option value="قرقنة"  >قرقنة </option>
<option value="المحرس"  >المحرس </option>
<option value="منزل شاكر"  >منزل شاكر </option>

`)
 break
case"قابس" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="قابس المدينة"  >قابس المدينة </option>
<option value="قابس الجنوبية"  >قابس الجنوبية </option>
<option value="قابس الغربية"  >قابس الغربية </option>
<option value="الحامة"  >الحامة </option>
<option value="غنوش"  >غنوش </option>
<option value="مارث"  >مارث </option>
<option value="مطماطة"  >مطماطة </option>
<option value="مطماطة الجديدة"  >مطماطة الجديدة </option>
<option value="المطوية"  >المطوية </option>
<option value="منزل الحبيب"  >منزل الحبيب </option>

`)
 break
case"مدنين" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="مدنين الشمالية"  >مدنين الشمالية </option>
<option value="مدنين الجنوبية"  >مدنين الجنوبية </option>
<option value="بنقردان"  >بنقردان </option>
<option value="بني خداش"  >بني خداش </option>
<option value="جربة حومة السوق"  >جربة حومة السوق </option>
<option value="جربة عجيم"  >جربة عجيم </option>
<option value="جربة ميدون"  >جربة ميدون </option>
<option value="جرجيس"  >جرجيس </option>
<option value="سيدي مخلوف"  >سيدي مخلوف </option>
`)
 break
case "المهدية" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="المهدية المدينة"  >المهدية المدينة </option>
<option value="أولاد الشامخ"  >أولاد الشامخ </option>
<option value="بومرداس"  >بومرداس </option>
<option value="الجم"  >الجم </option>
<option value="السواسي"  >السواسي </option>
<option value="سيدي علوان"  >سيدي علوان </option>
<option value="الشابة"  >الشابة </option>
<option value="شربان"  >شربان </option>
<option value="قصور الساف"  >قصور الساف </option>
<option value="ملولش"  >ملولش </option>
<option value="هبيرة"  >هبيرة </option>
`)
 break
case "باجة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="باجة الشمالية"  >باجة الشمالية </option>
<option value="باجة الجنوبية"  >باجة الجنوبية </option>
<option value="تبرسق"  >تبرسق </option>
<option value="تستور"  >تستور </option>
<option value="تيبار"  >تيبار </option>
<option value="عمدون"  >عمدون </option>
<option value="قبلاط"  >قبلاط </option>
<option value="مجاز الباب"  >مجاز الباب </option>
<option value="نفزة"  >نفزة </option>
`)
 break
case "بنزرت" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="بنزرت الشمالية"  >بنزرت الشمالية </option>
<option value="بنزرت الجنوبية"  >بنزرت الجنوبية </option>
<option value="أوتيك"  >أوتيك </option>
<option value="تينجة"  >تينجة </option>
<option value="جرزونة"  >جرزونة </option>
<option value="جومين"  >جومين </option>
<option value="رأس الجبل"  >رأس الجبل </option>
<option value="سجنان"  >سجنان </option>
<option value="العالية"  >العالية </option>
<option value="غار الملح"  >غار الملح </option>
<option value="غزالة"  >غزالة </option>
<option value="ماطر"  >ماطر </option>
<option value="منزل بورقيبة"  >منزل بورقيبة </option>
<option value="منزل جميل"  >منزل جميل </option>
`)
 break
case "قفصة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="قفصة الشمالية"  >قفصة الشمالية </option>
<option value="قفصة الجنوبية"  >قفصة الجنوبية </option>
<option value="أم العرائس"  >أم العرائس </option>
<option value="بلخير"  >بلخير </option>
<option value="الرديف"  >الرديف </option>
<option value="السند"  >السند </option>
<option value="سيدي بوبكر"  >سيدي بوبكر </option>
<option value="سيدي عيش"  >سيدي عيش </option>
<option value="القصر"  >القصر </option>
<option value="القطار"  >القطار </option>
<option value="المتلوي"  >المتلوي </option>
<option value="المظيلة"  >المظيلة </option>
`)
 break
case "جندوبة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="جندوبة المدينة"  >جندوبة المدينة </option>
<option value="جندوبة الشمالية"  >جندوبة الشمالية </option>
<option value="بلطة بوعوان"  >بلطة بوعوان </option>
<option value="بوسالم"  >بوسالم </option>
<option value="طبرقة"  >طبرقة </option>
<option value="عين دراهم"  >عين دراهم </option>
<option value="غار الدماء"  >غار الدماء </option>
<option value="فرنانة"  >فرنانة </option>
<option value="وادي مليز"  >وادي مليز </option>
`)
 break
case "القيروان" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="القيروان الشمالية"  >القيروان الشمالية </option>
<option value="القيروان الجنوبية"  >القيروان الجنوبية </option>
<option value="بوحجلة"  >بوحجلة </option>
<option value="حاجب العيون"  >حاجب العيون </option>
<option value="حفوز"  >حفوز </option>
<option value="السبيخة"  >السبيخة </option>
<option value="الشبيكة"  >الشبيكة </option>
<option value="الشراردة"  >الشراردة </option>
<option value="العلا"  >العلا </option>
<option value="نصر الله"  >نصر الله </option>
<option value="الوسلاتية"  >الوسلاتية </option>
`)
 break
case "القصرين" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="القصرين الشمالية"  >القصرين الشمالية </option>
<option value="القصرين الجنوبية"  >القصرين الجنوبية </option>
<option value="تالة"  >تالة </option>
<option value="جدليان"  >جدليان </option>
<option value="حاسي الفريد"  >حاسي الفريد </option>
<option value="حيدرة"  >حيدرة </option>
<option value="الزهور"  >الزهور </option>
<option value="سبيبة"  >سبيبة </option>
<option value="سبيطلة"  >سبيطلة </option>
<option value="العيون"  >العيون </option>
<option value="فريانة"  >فريانة </option>
<option value="فوسانة"  >فوسانة </option>
<option value="ماجل بلعباس"  >ماجل بلعباس </option>
`)
 break
case "الكاف" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="الكاف الشرقية"  >الكاف الشرقية </option>
<option value="الكاف الغربية"  >الكاف الغربية </option>
<option value="تاجروين"  >تاجروين </option>
<option value="الجريصة"  >الجريصة </option>
<option value="الدهماني"  >الدهماني </option>
<option value="ساقية سيدي يوسف"  >ساقية سيدي يوسف </option>
<option value="السرس"  >السرس </option>
<option value="الطويرف"  >الطويرف </option>
<option value="القصور"  >القصور </option>
<option value="القلعة الخصبة"  >القلعة الخصبة </option>
<option value="قلعة سنان"  >قلعة سنان </option>
<option value="نبر"  >نبر </option>
`)
 break
case "منستير" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="المنستير المدينة"  >المنستير المدينة </option>
<option value="البقالطة"  >البقالطة </option>
<option value="بنبلة"  >بنبلة </option>
<option value="بني حسان"  >بني حسان </option>
<option value="جمال"  >جمال </option>
<option value="زرمدين"  >زرمدين </option>
<option value="الساحلين"  >الساحلين </option>
<option value="طبلبة"  >طبلبة </option>
<option value="قصر هلال"  >قصر هلال </option>
<option value="قصيبة المديوني"  >قصيبة المديوني </option>
<option value="المكنين"  >المكنين </option>
<option value="الوردانين"  >الوردانين </option>
<option value="صيادة + لمطة + بوحجر"  >صيادة + لمطة + بوحجر </option>

`)
 break
case "نابل" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="نابل المدينة"  >نابل المدينة </option>
<option value="دار شعبان الفهري"  >دار شعبان الفهري </option>
<option value="بني خلاد"  >بني خلاد </option>
<option value="بني خيار"  >بني خيار </option>
<option value="بوعرقوب"  >بوعرقوب </option>
<option value="تاكلسة"  >تاكلسة </option>
<option value="الحمامات"  >الحمامات </option>
<option value="حمام الأغزاز"  >حمام الأغزاز </option>
<option value="سليمان"  >سليمان </option>
<option value="قربة"  >قربة </option>
<option value="قرمبالية"  >قرمبالية </option>
<option value="قليبية"  >قليبية </option>
<option value="الميدة"  >الميدة </option>
<option value="منزل بوزلفة"  >منزل بوزلفة </option>
<option value="منزل تميم"  >منزل تميم </option>
<option value="الهوارية"  >الهوارية </option>
`)
 break
case "سيدي بوزيد" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="سيدي بوزيد الشرقية"  >سيدي بوزيد الشرقية </option>
<option value="سيدي بوزيد الغربية"  >سيدي بوزيد الغربية </option>
<option value="بئر الحفي"  >بئر الحفي </option>
<option value="جلمة"  >جلمة </option>
<option value="المزونة"  >المزونة </option>
<option value="المكناسي"  >المكناسي </option>
<option value="منزل بوزيان"  >منزل بوزيان </option>
<option value="أولاد حفوز"  >أولاد حفوز </option>
<option value="الرقاب"  >الرقاب </option>
<option value="السبالة"  >السبالة </option>
<option value="سيدي علي بن عون"  >سيدي علي بن عون </option>
<option value="السوق الجديد"  >السوق الجديد </option>
`)
 break
case "سليانة" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="سليانة الشمالية"  >سليانة الشمالية </option>
<option value="سليانة الجنوبية"  >سليانة الجنوبية </option>
<option value="برقو"  >برقو </option>
<option value="بوعرادة"  >بوعرادة </option>
<option value="الروحية"  >الروحية </option>
<option value="العروسة"  >العروسة </option>
<option value="سيدي بورويس"  >سيدي بورويس </option>
<option value="قعفور"  >قعفور </option>
<option value="الكريب"  >الكريب </option>
<option value="كسرى"  >كسرى </option>
<option value="مكثر"  >مكثر </option>

`)
 break
case "تطاوين" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="تطاوين الشمالية"  >تطاوين الشمالية </option>
<option value="تطاوين الجنوبية"  >تطاوين الجنوبية </option>
<option value="بئر الأحمر"  >بئر الأحمر </option>
<option value="الذهيبة"  >الذهيبة </option>
<option value="رمادة"  >رمادة </option>
<option value="الصمار"  >الصمار </option>
<option value="غمراسن"  >غمراسن </option>
`)
 break
case "توزر" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="توزر المدينة"  >توزر المدينة </option>
<option value="تمغزة"  >تمغزة </option>
<option value="حزوة"  >حزوة </option>
<option value="دقاش"  >دقاش </option>
<option value="نفطة"  >نفطة </option>
`)
 break
case "زغوان" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="زغوان المدينة"  >زغوان المدينة </option>
<option value="بئر مشارقة"  >بئر مشارقة </option>
<option value="الزريبة"  >الزريبة </option>
<option value="صواف"  >صواف </option>
<option value="الفحص"  >الفحص </option>
<option value="الناظور"  >الناظور </option>
`)
 break
case "قبلي" : 
$("#DelegationAr").show()
$("#DelegationAr").html(`
<option selected value="المعتمدية"  >المعتمدية </option>
<option value="قبلي الشمالية"  >قبلي الشمالية </option>
<option value="قبلي الجنوبية"  >قبلي الجنوبية </option>
<option value="دوز الشمالية"  >دوز الشمالية </option>
<option value="دوز الجنوبية"  >دوز الجنوبية </option>
<option value="سوق الأحد"  >سوق الأحد </option>
<option value="الفوار"  >الفوار </option>
`)
case 'الولاية':
$("#DelegationAr").hide()
 break
}
});
$(document).ready(function(){
    $("#DelegationAr").hide();
})

