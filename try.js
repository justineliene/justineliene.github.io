function start(){
    var tasks=[
    {
    row1:"070190065",
    row2:"900000102",
    row3:"006528090",
    row4:"109270300",
    row5:"807301904",
    row6:"005049207",
    row7:"090683500",
    row8:"301000009",
    row9:"560017030"
    },
    {
    row1:"007301400",
    row2:"062080510",
    row3:"090050020",
    row4:"700809005",
    row5:"015000240",
    row6:"300205001",
    row7:"040030050",
    row8:"078060390",
    row9:"001502700"
   },
   {
    row1:"005010200",
    row2:"091504860",
    row3:"760030054",
    row4:"010857030",
    row5:"803000607",
    row6:"020163080",
    row7:"380040021",
    row8:"046301790",
    row9:"002080300"
},
{
    row1:"056000180",
    row2:"400238009",
    row3:"809060403",
    row4:"080301040",
    row5:"013050290",
    row6:"040907050",
    row7:"204090807",
    row8:"100674005",
    row9:"097000630"
},
{
    row1:"704609802",
    row2:"050102090",
    row3:"900030001",
    row4:"140000079",
    row5:"002070500",
    row6:"380000064",
    row7:"200060003",
    row8:"060301020",
    row9:"508207106"
},
{
    row1:"200060007",
    row2:"079000510",
    row3:"050901080",
    row4:"002516700",
    row5:"700080009",
    row6:"003792100",
    row7:"080103070",
    row8:"027000830",
    row9:"100040006"
},
{
    row1:"004902800",
    row2:"003187900",
    row3:"801000702",
    row4:"010704090",
    row5:"900000006",
    row6:"040805010",
    row7:"409000603",
    row8:"007429100",
    row9:"005608400"
},
];

var random = Math.round(Math.random()*10)-1;
if (random<0){
    random=0;
}
if (random>6){
    random=6;
}
document.getElementById("tasknumber").value=random;
var task = tasks[random];
for(var i=0; i<9; i++){
    if(task.row1[i]=="0"){
    } else {
        document.getElementById("1"+(i+1)).value = task.row1[i];
        document.getElementById("1"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("1"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("1"+(i+1)).readOnly = true;
    }
    if(task.row2[i]=="0"){
    } else {
        document.getElementById("2"+(i+1)).value = task.row2[i];
        document.getElementById("2"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("2"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("2"+(i+1)).readOnly = true;
    }
    if(task.row3[i]=="0"){
    } else {
        document.getElementById("3"+(i+1)).value = task.row3[i];
        document.getElementById("3"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("3"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("3"+(i+1)).readOnly = true;
    }
    if(task.row4[i]=="0"){
    } else {
        document.getElementById("4"+(i+1)).value = task.row4[i];
        document.getElementById("4"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("4"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("4"+(i+1)).readOnly = true;
    }
    if(task.row5[i]=="0"){
    } else {
        document.getElementById("5"+(i+1)).value = task.row5[i];
        document.getElementById("5"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("5"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("5"+(i+1)).readOnly = true;
    }
    if(task.row6[i]=="0"){
    } else {
        document.getElementById("6"+(i+1)).value = task.row6[i];
        document.getElementById("6"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("6"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("6"+(i+1)).readOnly = true;
    }
    if(task.row7[i]=="0"){
    } else {
        document.getElementById("7"+(i+1)).value = task.row7[i];
        document.getElementById("7"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("7"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("7"+(i+1)).readOnly = true;
    }
    if(task.row8[i]=="0"){
    } else {
        document.getElementById("8"+(i+1)).value = task.row8[i];
        document.getElementById("8"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("8"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("8"+(i+1)).readOnly = true;
    }
    if(task.row9[i]=="0"){
    } else {
        document.getElementById("9"+(i+1)).value = task.row9[i];
        document.getElementById("9"+(i+1)).style.backgroundColor = "#EEE7E4";
        document.getElementById("9"+(i+1)).style.border = "2px solid #ccc";
        document.getElementById("9"+(i+1)).readOnly = true;
    }

}



}


function check(){
    
    var answers=[{
        row1:"273194865",
        row2:"958736142",
        row3:"416528793",
        row4:"149275386",
        row5:"827361954",
        row6:"635849217",
        row7:"794683521",
        row8:"381452679",
        row9:"562917438"
    },
    {
        row1:"857321469",
        row2:"462987513",
        row3:"193456827",
        row4:"724819635",
        row5:"915673248",
        row6:"386245971",
        row7:"249738156",
        row8:"578164392",
        row9:"631592784"
    },
    {
        row1:"435618279",
        row2:"291574863",
        row3:"768239154",
        row4:"614857932",
        row5:"853492617",
        row6:"927163485",
        row7:"389746521",
        row8:"546321798",
        row9:"172985346"
    },
    {
        row1:"356749182",
        row2:"471238569",
        row3:"829165473",
        row4:"985321746",
        row5:"713456298",
        row6:"642987351",
        row7:"264593817",
        row8:"138674925",
        row9:"597812634"
    },
    {
        row1:"714659832",
        row2:"853142697",
        row3:"926738451",
        row4:"145826379",
        row5:"692473518",
        row6:"387915264",
        row7:"271564983",
        row8:"469381725",
        row9:"538297146"
    },
    {
        row1:"218465397",
        row2:"679238514",
        row3:"354971682",
        row4:"892516743",
        row5:"761384259",
        row6:"543792168",
        row7:"986123475",
        row8:"427659831",
        row9:"135847926"
    },
    {
        row1:"764952831",
        row2:"253187964",
        row3:"891346752",
        row4:"512764398",
        row5:"978213546",
        row6:"346895217",
        row7:"489571623",
        row8:"637429185",
        row9:"125638479"
    }];
    
    var c11 = document.getElementById("11").value;
    var c12 = document.getElementById("12").value;
    var c13 = document.getElementById("13").value;
    var c14 = document.getElementById("14").value;
    var c15 = document.getElementById("15").value;
    var c16 = document.getElementById("16").value;
    var c17 = document.getElementById("17").value;
    var c18 = document.getElementById("18").value;
    var c19 = document.getElementById("19").value;
    var c21 = document.getElementById("21").value;
    var c22 = document.getElementById("22").value;
    var c23 = document.getElementById("23").value;
    var c24 = document.getElementById("24").value;
    var c25 = document.getElementById("25").value;
    var c26 = document.getElementById("26").value;
    var c27 = document.getElementById("27").value;
    var c28 = document.getElementById("28").value;
    var c29 = document.getElementById("29").value;
    var c31 = document.getElementById("31").value;
    var c32 = document.getElementById("32").value;
    var c33 = document.getElementById("33").value;
    var c34 = document.getElementById("34").value;
    var c35 = document.getElementById("35").value;
    var c36 = document.getElementById("36").value;
    var c37 = document.getElementById("37").value;
    var c38 = document.getElementById("38").value;
    var c39 = document.getElementById("39").value;
    var c41 = document.getElementById("41").value;
    var c42 = document.getElementById("42").value;
    var c43 = document.getElementById("43").value;
    var c44 = document.getElementById("44").value;
    var c45 = document.getElementById("45").value;
    var c46 = document.getElementById("46").value;
    var c47 = document.getElementById("47").value;
    var c48 = document.getElementById("48").value;
    var c49 = document.getElementById("49").value;
    var c51 = document.getElementById("51").value;
    var c52 = document.getElementById("52").value;
    var c53 = document.getElementById("53").value;
    var c54 = document.getElementById("54").value;
    var c55 = document.getElementById("55").value;
    var c56 = document.getElementById("56").value;
    var c57 = document.getElementById("57").value;
    var c58 = document.getElementById("58").value;
    var c59 = document.getElementById("59").value;
    var c61 = document.getElementById("61").value;
    var c62 = document.getElementById("62").value;
    var c63 = document.getElementById("63").value;
    var c64 = document.getElementById("64").value;
    var c65 = document.getElementById("65").value;
    var c66 = document.getElementById("66").value;
    var c67 = document.getElementById("67").value;
    var c68 = document.getElementById("68").value;
    var c69 = document.getElementById("69").value;
    var c71 = document.getElementById("71").value;
    var c72 = document.getElementById("72").value;
    var c73 = document.getElementById("73").value;
    var c74 = document.getElementById("74").value;
    var c75 = document.getElementById("75").value;
    var c76 = document.getElementById("76").value;
    var c77 = document.getElementById("77").value;
    var c78 = document.getElementById("78").value;
    var c79 = document.getElementById("79").value;
    var c81 = document.getElementById("81").value;
    var c82 = document.getElementById("82").value;
    var c83 = document.getElementById("83").value;
    var c84 = document.getElementById("84").value;
    var c85 = document.getElementById("85").value;
    var c86 = document.getElementById("86").value;
    var c87 = document.getElementById("87").value;
    var c88 = document.getElementById("88").value;
    var c89 = document.getElementById("89").value;
    var c91 = document.getElementById("91").value;
    var c92 = document.getElementById("92").value;
    var c93 = document.getElementById("93").value;
    var c94 = document.getElementById("94").value;
    var c95 = document.getElementById("95").value;
    var c96 = document.getElementById("96").value;
    var c97 = document.getElementById("97").value;
    var c98 = document.getElementById("98").value;
    var c99 = document.getElementById("99").value;

    var taskNumber = document.getElementById("tasknumber").value;
    var check1 = false;
    var check2 = false;
    var check3 = false;
    var check4 = false;
    var check5 = false;
    var check6 = false;
    var check7 = false;
    var check8 = false;
    var check9 = false;
    if((c11+c12+c13+c14+c15+c16+c17+c18+c19)==answers[taskNumber].row1){
        check1 = true;
    }
    if((c21+c22+c23+c24+c25+c26+c27+c28+c29)==answers[taskNumber].row2){
        check2 = true;
    }
    if((c31+c32+c33+c34+c35+c36+c37+c38+c39)==answers[taskNumber].row3){
        check3 = true;
    }
    if((c41+c42+c43+c44+c45+c46+c47+c48+c49)==answers[taskNumber].row4){
        check4 = true;
    }
    if((c51+c52+c53+c54+c55+c56+c57+c58+c59)==answers[taskNumber].row5){
        check5 = true;
    }
    if((c61+c62+c63+c64+c65+c66+c67+c68+c69)==answers[taskNumber].row6){
        check6 = true;
    }
    if((c71+c72+c73+c74+c75+c76+c77+c78+c79)==answers[taskNumber].row7){
        check7 = true;
    }
    if((c81+c82+c83+c84+c85+c86+c87+c88+c89)==answers[taskNumber].row8){
        check8 = true;
    }
    if((c91+c92+c93+c94+c95+c96+c97+c98+c99)==answers[taskNumber].row9){
        check9 = true;
    }
    if(check1&&check2&&check3&&check4&&check5&&check6&&check7&&check8&&check9){
        alert('Congratulations! You did it!');
    } else {
        alert('Uh, oh! You did something wrong. Maybe try another one!');
    } 
    location.href ('tryout.html');
}