import './App.css';
import Racoon from './Components/004/Racoon';

function App() {

  const racoons = [
    {size: 20, niceColor: 'crimson', name: 'Simas'},
    {size: 50, niceColor: 'orage', name: 'Rimas'},
    {size: 10, niceColor: 'pink', name: 'Sigutė'},
    {size: 30, niceColor: 'gray', name: 'Antanas'},
    {size: 30, niceColor: 'lightsalmon', name: 'Ona'},
    {size: 60, niceColor: 'lime', name: 'Jadvyga'}
  ];

  

  return (
    <div className="App">
      <header className="App-header">

      {
        racoons.sort((a, b) => b.size - a.size).map(r => <Racoon key={r.name} size={r.size} niceColor={r.niceColor} name={r.name} />)
      }

      </header>
    </div>
  );

}

export default App;
