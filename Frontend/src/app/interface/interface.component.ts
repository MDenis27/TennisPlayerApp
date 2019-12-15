import DateTimeFormat = Intl.DateTimeFormat;

export interface Customer {
  id: number;
  name: string;
  firstname: string;
  phone: string;
  mail: string;
  note: string;
  idRacket: Racket[];
}

export interface Racket {
  id: number;
  brand: string;
  model: string;
  stringed: boolean;
  idPerson: number;
  idString: TennisString[];
}

export interface TennisString {
  id: number;
  brand: string;
  model: string;
  gauge: number;
  longTension: number;
  crossTension: number;
  date: Date;
  idRacket: number;
  idPerson: number;
}


