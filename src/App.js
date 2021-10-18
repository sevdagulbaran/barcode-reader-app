import './App.css';
import React, { useRef , useEffect} from 'react';

function App() {

  const video = useRef(null);

  // ilk çalıstırdıgımda
useEffect(() => {
  navigator.mediaDevices.getUserMedia({
    video: {
      width: 300,
      height: 300,} })
      .then(stream =>{
        video.current.srcObject = stream;
        video.current.play();
        console.log("kamera acıldı..");
      }).catch(err=> console.log(err))

}, [])


  return (
    <div className="App">
       <video ref= {video}  autoplay muted/>
    </div>
  );
}

export default App;
