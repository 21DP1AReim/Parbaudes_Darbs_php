1. Jautājums. Kas ir API?
API ir application programming interface
2. Jautājums. Kā deklarēt mainīgo PHP valodā?
Izmantojot zīmi "$", piemēram, $variable
3. Jautājums Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto view, controller un model. Ar modeļiem veido izmaiņas datu bāzē, kā tabulas, izmantojot migrācijas, bet controllerus izmanto lai pārvaldītu modeļus. Savukārt view ir blade, jeb weblapas.
4. Jautājums Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
Object relation mapping, programmēšanas veids, kas maina datu bāzes struktūru ar objektiem, savukārt SQL izmano queries, lai darbotos ar datu bāzi. Ar ORM sanāk mazāk rakstīt, taču ar SQL var izviedot sarežģītākas datu bāzēs.
5. Jautājums. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra.

public function index(){
return response()->json(User::where('rating', '>', 4)->get());
}


