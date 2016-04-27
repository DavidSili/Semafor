<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>A Timed Slide Show</title>
<script type = "text/javascript">
Array.prototype.randomize = function()
{
	var i = this.length, j, temp;
	while ( --i )
	{
		j = Math.floor( Math.random() * (i - 1) );
		temp = this[i];
		this[i] = this[j];
		this[j] = temp;
	}
}
 

var the_images = new Array();
var pre_images = new Array();
var the_timeout;
var brzina;
var izbor;
var brreci;
var prepbaza;
var baza="vrata,ljudi,dajem,maloj,usima,punog,prema,onima,ceznu,radja,vrate,takvi,cesto,nekad,znati,naoko,tezak,cilju,uputi,cezne,korak,putem,utehu,mnogi,pomoc,legao,vrhom,nacin,utehe,nista,imena,tvoja,preda,mojim,uljem,glavu,izvor,sreci,zivih,dajes,hranu,vreme,svoju,sitis,zelji,traga,senke,doneo,usred,trnje,ckalj,zivot,planu,grehu,bedom,cveca,vlati,trave,divne,ptice,naseg,ucini,molio,slavu,dobro,slava,grehe,mihej,sobom,preko,dobra,naveo,ljude,kruta,tamnu,senku,svetu,dosao,medju,video,nikad,jovan,matej,jedan,rekao,javim,posla,cinio,djavo,uzvik,jedne,dokaz,mogao,penju,ostru,naneo,glasu,svoje,ostre,odbio,primi,njega,punom,svaki,covek,ocima,cuvao,cijeg,takav,nezni,ziveo,trpeo,bismo,mogli,svete,slave,dodje,smrti,njemu,ranom,krstu,teret,greha,jedno,usana,zasto,svest,zrtva,zelja,spase,omile,zrtve,zrtvu,izlio,sinom,borba,ljubi,uzmem,znaci,jamac,mojom,njene,mogla,morao,vezao,smeju,stidi,tokom,rodom,onome,umire,kakvu,verom,takva,misao,volji,krsta,majke,misli,ciste,sveti,silom,ostao,kusac,kojim,tugom,blago,posle,vlada,svako,srcem,nasao,mesto,oganj,cisto,mozda,zelje,treba,rekoh,valja,nebom,pavle,zakon,dobar,dakle,sveta,svima,bezao,posto,isava,svega,strah,iznad,cudna,kojoj,lezao,samih,punih,jakov,moglo,snovi,dobri,kroza,decom,zrtvi,ulaze,nasih,svoja,druge,osudu,kaznu,odnos,sluze,sklad,ubrzo,nasem,pravu,valam,macem,izdao,otelo,osude,slama,zalio,sveca,kazne,dalje,samog,tajne,odaje,oseca,prava,napor,zelju,david,svoga,ovako,prima,cijem,belji,snega,nemoj,uzeti,vrati,jezik,tvoju,grese,misle,poziv,petar,ovoga,spasa,svake,dobre,usadi,svaka,budem,tajna,utice,zelom,kojeg,gresi,zloca,imamo,plana,njima,odmor,zedan,necim,pruzi,izraz,jedna,svaku,ruznu,mrlju,gnusa,cisti,snage,obzir,slovu,onako,gleda,ozive,umreh,oceni,jeste,ukora,mrski,padne,teski,oseti,jadni,drugi,istim,dodju,bolje,kakvi,tvrde,uteci,bolji,draga,nikog,pruze,znaju,pravo,zelim,mnogo,krije,ploda,imati,krici,bolno,stoji,kojom,okaje,slabi,volju,manje,nezne,krize,celog,retki,kraju,grema,zanje,celoj,price,volja,danas,prave,dusom,kakva,jesam,vecni,formu,trazi,niceg,lazne,kojih,jasno,iznos,simon,sadje,mucna,zatim,nasim,uslov,nismo,olako,blizu,onoma,takve,stetu,javni,javno,jasna,krivi,brani,imaju,oblik,zlocu,ociju,mojih,ucite,zalog,stane,plodu,kakav,svemu,adama,stida,uzasa,jedoh,zmiju,zmija,duhom,slika,mnoge,vlast,pravi,veran,mrtvi,glava,glave,mrezu,borbe,razum,mamon,novcu,lanac,ugled,okovi,truda,traze,cilja,jaram,borbu,mnoga,ohola,moram,opere,tesko,nesto,samom,celom,stalo,srece,prime,breme,useli,peska,niste,kadri,volje,njome,vasih,vasem,novim,biste,ikada,plate,crvac,lecio,imali,vodio,znate,imate,tvoje,odmah,zeleo,hodao,snagu,hteti,marko,idemo,svoji,skupo,cinom,zaceo,probu,drago,pasti,licno,skine,odecu,odene,oblak,maglu,onoga,iskru,smete,zivim,rasuo,stici,nisam,prica,nezna,cinim,drugo,vasoj,vecno,mogle,porod,celim,otaca,staro,tacno,cujes,vetar,radom,smemo,losim,nekog,cijoj,jesmo,oholi,tasti,drski,cedni,zavet,pocne,sunca,menja,svuda,ucine,druga,pismo,pozna,tvori,deset,datih,tvrdi,mrtva,hodio,zpvot,sreca,stace,vaseg,dokle,jednu,naime,vrsta,drscu,uziva,rekla,desne,pisem,mestu,istoj,slici,rasta,polju,slike,udela,travu,potom,klasu,osija,rastu,cvece,sluzi,sunce,darom,kruzi,kugle,udisu,suncu,zraci,uzoru,rasla,obave,trude,njime,vidim,posao,jutra,cekaj,pokoj,trudi,brige,vezom,mamce,nasli,kleti,pouke,sluge,casti,kivan,snaga,uzneo,glasa,znali,zarko,molbe,dodao,malom,molim,radio,dadoh,zivog,drzao,srecu,bedni,miris,stara,otkup,vazno,licne,mirni,filip,bogat,vecim,zedni,rasti,mesta,rasce,imace,dodir,grade,raste,stice,hrane,udove,vezba,dobio,crkva,njena,nalog,krugu,crkvi,verno,braco,uneti,hteli,klasi,mirno,proci,polja,potok,cesce,pouka,briga,mucni,tihoj,atoma,brine,malog,nezno,uvece,gosti,stola,zalac,masta,ljube,cvetu,brega,mudar,spise,prvog,skoro,sveto,nasoj,narod,pisma,ozivi,kakve,retko,njenu,njeno,steci,jasni,takvo,rudar,ispod,pozva,videh,znamo,vodic,krene,cudno,kceri,kljuc,budno,prvih,inace,placa,varao,dosli,recju,spada,mudri,nazad,omete,idete,verni,javna,tajnu,slusa,tajno,zrake,ulici,carem,nadje,kuzna,vlasi,glavi,lican,delio,velim,monah,rukom,pesme,hvale,smelo,nekom,hvalu,okupe,nadju,blize,mladi,velom,mozes,pakla,tajni,pismu,spisa,teske,teska,bibli,umovi,pecat,umove,tekst,icije,ucimo,toplo,delom,nauka,dosad,jasne,tamne,bracu,crkve,kraja,vecma,zbrku,licem,stoje,neznu,salje,lazno,brala,pored,ruzno,iduci,divni,nekih,cvecu,brali,mudro,mraka,bacio,majka,zamke,vasim,uliva,borbi,samim,krenu,strog,uzdaj,hrani,snaci,nemir,mrste,preti,bojte,uzmes,zanju,mlade,ptica,cuvar,sjaju,odeca,sutra,odeva,plasi,kazah,dovde,utesi,namje,traju,tvoji,belim";
baza=baza.split(",");
function rotateImage(index)
{
	brzina = document.getElementById("ranges").value;
	var sours = document.getElementById("sours").value;

	if(document.getElementById('iz1').checked) {
		pre_images = sours.toLowerCase();
	}else if(document.getElementById('iz2').checked) {
		brreci = document.getElementById("brreci").value;

		baza.randomize();

		for (var i=0; i<brreci; i++)
		  {
		    prepbaza=prepbaza+baza[i]+" ";
		  }	
		pre_images = prepbaza.slice(0, - 1);
	}

	pre_images = pre_images.split("");

	for (var i=0;i<pre_images.length;i++)
		{
			if (pre_images[i] == " ") {
				the_images[i] = new Image();
				the_images[i].src = "ready.png";
			}
			else {
				the_images[i] = new Image();
				the_images[i].src = pre_images[i] + ".png";
			}
		}
		
	var last_image=pre_images.length;
	the_images[last_image] = new Image();
	the_images[last_image].src = "ready.png";
	
	window.document.my_image.src = the_images[index].src;
	index++;
	var the_function_string = "rotateImage(" + index + ");";
	the_timeout = setTimeout(the_function_string, brzina);
}
function updateRanges(val) {
  document.getElementById('ranges').value=val; 
}
function updateRange(val) {
  document.getElementById('brzina').value=val; 
}

</script>
</head>
<body>
<form>
<input type="button" value="start the show" onclick="rotateImage(0)">
<input type="button" value="stop the show" onClick="clearTimeout(the_timeout)">
<br/><br/>
<div style="border:1px solid #000;width:550px;padding:5px">
Tekst: <input id="sours" type="text" style="width:300px"><br/><br/>
<input type="range" id="brzina" min="100" max="10000" value="5000" style="width:300px" onchange="updateRanges(this.value)"><input type="text" id="ranges" style="width:50px" value="5000" onchange="updateRange(this.value)" /> (hiljaditih delova sekunde)
</div>
Unos teksta <input type="radio" name="izbor" id="iz1" /><br/>
ili<br/>
Iz baze <input type="radio" name="izbor" id="iz2" checked="checked" /><br/>
<div style="border:1px solid #000;width:170px;padding:5px">
Broj reči:<input type="number" id="brreci" min="1" max="100" value="1"/><br/>
</div>
</form>
<center><img name = "my_image" src = "ready.png" style="width:600px;height:500px;position:absolute;left:650px;top:100px"></center>
</body>
</html>