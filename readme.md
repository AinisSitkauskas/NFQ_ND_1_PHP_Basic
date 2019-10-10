# NFQ Akademija 1 namų darbas PHP Basic/Intro

Aliko: Ainis Šitkauskas

Leidžiant per konsolę gautas toks rezultatas: 
![Image](https://github.com/AinisSitkauskas/NFQ_ND_1_PHP_Basic/blob/master/image/image.JPG)

Pateikiami paaiškinimai kodėl gauname tokie rezultatai: 

**calculateHomeWorkSum(…$numbers);  //root namespace;**
Paleidus šią funkciją gauname **6,2** kadangi PHP sudeda visų tipų kintamuosius kaip skaičius ir grąžina *float* tipo kintamąjį.

**calculateHomeWorkSum(…$numbers): int; //Nfq\Akademija\NotTyped namespace** 
Paleidus šią funkciją gauname **6** kadangi, PHP sudeda visų tipų kintamuosius kaip skaičius ir funkcija grąžina sumą, kaip sveikąjį skaičių *int*.

**calculateHomeWorkSum(int…$numbers): int; //Nfq\Akademija\Soſt namespace;**
Paleidus šią funkciją gauname **6**, kadangi PHP pati patikrina ar galima parametrus pakeisti į sveikojo skaičiaus tipą ir jei tai pavyksta, programa sudeda skaičius nepasaisant jog vienas parametras buvo *float* , o kitas *string* tipo. Klaida būtų metama tuo atveju jei parametras būtų toks, kurio nebūtų galima konvertuoti į *int* tipą  ("pvz. string 'knyga' ir pan.). Sudėjus skaičius, funkcija grąžina sumą, kaip sveikąjį skaičių *int*.

**calculateHomeWorkSum(int…$numbers): int; //Nfq\Akademija\Strict namespace su declare(strict_types=1)**
Paleidus šią funkciją gauname **6**, kadangi *declare(strict_types=1)* buvo deklaruotas funckijos faile, o funkcija kviečiama *index.php* faile, kur nėra deklaruotas *strict types*, todėl ši funckija veikia lygiai taip pat, kaip *Soft* funckija (ta kuri buvo prieš tai aprašyta). Jei funcija būtų kviečiama funkcijos faile, tuomet gautume klaidos pranešimą, kadangi ne visi parametrai yra sveikojo skaičiaus tipo *int*.
