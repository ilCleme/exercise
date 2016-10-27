##Utilizzo

Per installare la repo è sufficiente
```
composer require ilcleme/exercise
```

l'unico vincolo è la minimum-stability da settare a dev.


##Obiettivi

Eseguire l'esercizio proposto. Di seguito le richieste.

Partendo dalla classe Revenue crea le classi mancanti (Employee, EmployeeType, Customer, Order) che implementino
almeno i metodi citati. Utilizza gli standard PSR-2 e PSR-4, commenta tutto il codice in inglese utilizzando PHPDoc.
Non utilizzare framework.
Riscrivi il metodo getTotal della classe Revenue senza utilizzare cicli foreach.
Crea un pacchetto con composer utilizzando le classi create.

**BONUS**

Implementa almeno un design pattern che ritieni possa essere applicato.
Installa un pacchetto composer di tua scelta ed utilizzalo all'interno di una delle classi.
Usa Traits, Closures, Magic Methods.


##Note

Per quanto riguarda l'uso di un design pattern, ho scelto di applicare un Pattern Strutturale (Dependency Injection) piuttosto che di altri 
tipi in quanto al momento l'implementazione risulta di base e non trovo motivi per applicare dei patter relativi alla 
Creazione oppure al comportamento degli oggetti come per esempio un Factory o uno Strategy.