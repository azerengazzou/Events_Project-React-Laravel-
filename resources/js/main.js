import React from 'react';
import ReactDOM from 'react-dom';
import Clubs from "./components/pages/Clubs"
import Welcome from "./components/pages/Welcome"
import {
    BrowserRouter as Router,
    Routes,
    Route
  } from "react-router-dom";
import Events from './components/pages/Events';
import ClubDetails from './components/pages/ClubDetails';
import EventDetails from './components/pages/EventDetails';
import Contact from './components/pages/Contact';
// import About from "./components/pages/About"
// import Contact from "./components/pages/Contact"
// import NotFound from "./components/pages/NotFound"
  
function Main() {
    return (
        <Router>
            <Routes>
                <Route exact path="/home"  element={<Welcome/>} />
                <Route exact path="/Clubs"  element={<Clubs/>} />
                <Route exact path="/Events"  element={<Events/>} />
                <Route exact path="/Contact"  element={<Contact/>} />
                <Route exact path="/clubs/clubdetails/:id" element={<ClubDetails/>}/>
                <Route exact path="/event/details"  element={<EventDetails/>} />
                
            </Routes>
        </Router>
    );
    
}
export default Main;
  
if (document.getElementById('example')) {
    ReactDOM.render(<Main/>, document.getElementById('example'));
}