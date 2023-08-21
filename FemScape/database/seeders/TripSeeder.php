<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trip = new Trip();
        $trip->place = "Creta";
        $trip->country = "Grecia";
        $trip->description = "Tierra de mitos y leyendas, cuna de importantes civilizaciones antiguas, isla con playas y paisajes naturales únicos en el mundo, Creta es el destino ideal para unas vacaciones inolvidables. La isla es la custodia de un patrimonio histórico, arqueológico y arquitectónico único en el mundo que se combina con impresionantes bellezas naturales. Desde las gargantas de Samaria hasta la famosa laguna de Balos pasando por los famosos sitios arqueológicos de Knossos, Phaistos y Malia: la isla de Creta se presenta como el destino ideal para unas vacaciones dedicadas a la relajación, la naturaleza y la historia.";
        $trip->image = "https://www.grecotour.com/img/cms/grecia/creta/region-lassithi/sitia-creta.jpg";
        $trip->save();

        $trip1 = new Trip();
        $trip1->place = "Bali";
        $trip1->country = "Indonesia";
        $trip1->description = "La isla de Bali es un oasis hinduista en Indonesia, uno de los países con mayor número de habitantes musulmanes del mundo. Se conoce a Bali como la isla de los dioses, y no es una exageración. Localizada en la parte más occidental del archipiélago de la Sonda, sus playas y paisajes la convierten en un destino deseado por muchos viajeros. Su pequeña extensión no es problema para encontrar templos, volcanes y profundos arrozales, además de una curiosa sensibilidad por crear cosas bellas, casi como si se tratara de un mandato social y que se manifiesta en ceremonias, artesanía e incluso en su deliciosa gastronomía local.";
        $trip1->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBSQ-6JTHOk9_EFALhXeIzGc0S9hdKWIuqtA&usqp=CAU";
        $trip1->save();

        $trip2 = new Trip();
        $trip2->place = "Mumbai";
        $trip2->country = "La India";
        $trip2->description = "Mumbai es en realidad una isla, su origen son siete aldeas pesqueras, a las que se le ha ido ganando terreno al mar, hasta unirse y formar una sóla. Es la capital financiera de India y alberga tanto los distritos más ricos del país como el mayor núcleo de chabolas “Dharavi”.  Mumbai  es también la capital del cine de India, conocida como Bollywood, que es un juego de palabras a partir de los nombres Bombay y Hollywood.";
        $trip2->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrvZAujjY61ZkLeTBDxsrNddaGzdsxYa3gGQ&usqp=CAU";
        $trip2->save();

        $trip3 = new Trip();
        $trip3->place = "Tahití";
        $trip3->country = "Polinesia Francesa";
        $trip3->description = "Perlas de coral en medio del Pacífico, estas islas acogen al viajero con la promesa de un mundo feliz, naíf, en el que el verdadero tesoro es la simplicidad de la vida";
        $trip3->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl8BFMlNQxL2JJY9yKfly2C62ihWRrDb8RLg&usqp=CAU";
        $trip3->save();

        $trip4 = new Trip();
        $trip4->place = "Cagliari";
        $trip4->country = "Cerdeña";
        $trip4->description = "Cagliari va directa al corazón: una historia milenaria, un mar de ensueño y un sinfín de atractivos. La historia, el arte y la cultura se mezclan con hermosas playas, zonas de lagunas y parques verdes: Cagliari es una joya sarda, una ciudad que cautiva con su majestuosa arquitectura, sus sinuosas callejuelas y su privilegiada ubicación con vistas al mar.";
        $trip4->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxun9ZJNup-36V8OP0SI0wfZxLXBSyBvmmag&usqp=CAU";
        $trip4->save();

        $trip5 = new Trip();
        $trip5->place = "Dhiffushi";
        $trip5->country = "Maldivas";
        $trip5->description = "Las islas Maldivas, un paraíso tropical en el océano Índico, son conocidas en todo el mundo por sus espectaculares playas de arena blanca, sus aguas cristalinas y su rica vida marina. Este archipiélago de islas dispersas ofrece una escapada perfecta para aquellos que buscan relajación, aventura y belleza natural. Las Maldivas constan de más de 1.000 islas y 26 atolones y es un destino paradisiaco para los amantes del buceo. Estas islas son famosas por sus playas de arena blanca y aguas cristalinas. Disfruta de la belleza natural de las playas y pasa el tiempo relajándote bajo el sol, nadando en las aguas turquesas o simplemente disfrutando de un romántico paseo por la orilla.";
        $trip5->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3wC6lmZzGIwz6wnQ-APcBDgPaLZwJjc5MEg&usqp=CAU";
        $trip5->save();

        $trip6 = new Trip();
        $trip6->place = "Dalmacia";
        $trip6->country = "Croacia";
        $trip6->description = "Dalmacia es la región turística más grande de Croacia, en cuyas aguas se pueden encontrar nada menos que 926 islas, acantilados y arrecifes. Los laberintos de las paredes rocosas en los innumerables viñedos y olivares son una constante a lo largo de las tres partes de la región - Norte, Centro y Sur de Dalmacia. Cada una posee atracciones culturales únicas que se encuentran en los pueblos del Mediterráneo, así como la belleza de la naturaleza virgen.";
        $trip6->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo1eZYL2FJtBBR42iOzyLhYWMw4sqsIH1EGA&usqp=CAU";
        $trip6->save();

        $trip7 = new Trip();
        $trip7->place = "Palawan";
        $trip7->country = "Filipinas";
        $trip7->description = "Palawan es una provincia insular de Filipinas, que forma parte de la región de las Visayas. Se trata de la provincia más grande en extensión de todo el país y forma un precioso archipiélago de maravillosas islas, que son paraísos naturales en sí mismas.";
        $trip7->image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ7e6R__eFgmVPVJ_UPmBKTycGjEUhibUFHg&usqp=CAU";
        $trip7->save();
    }
}
