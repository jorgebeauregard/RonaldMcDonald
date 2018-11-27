import React, { Component } from 'react';
import {BrowserRouter, Route} from "react-router-dom";

import 'bulma/css/bulma.css';
import './App.css';

import NavBar from './components/NavBar';
import ChildComponent from './components/ChildComponent';
import ChildrenComponent from './components/ChildrenComponent';
import CompanionComponent from './components/CompanionComponent';
import DashboardComponent from './components/DashboardComponent';
import RoomComponent from './components/RoomComponent';
import RegisterChildrenComponent from './components/RegisterChildrenComponent';

class App extends Component {
  render() {
    return (
      <div className="margin-bottom">
        <NavBar/>
        <div className="container is-fluid margin">
          <BrowserRouter>
            <div>
              <Route path="/" component={DashboardComponent} exact />
              <Route path="/children" component={ChildrenComponent} exact/>
              <Route path="/registerChild" component={RegisterChildrenComponent}/>
              <Route path="/children/:id" component={ChildComponent} exact strict/>
              <Route path="/companions/:id" component={CompanionComponent} />
              <Route path="/rooms" component={RoomComponent}/>
            </div>
          </BrowserRouter>
        </div>
      </div>
    );
  }
}

export default App;
