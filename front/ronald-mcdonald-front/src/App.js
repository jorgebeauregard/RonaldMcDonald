import React, { Component } from 'react';
import {BrowserRouter, Route} from "react-router-dom";

import 'bulma/css/bulma.css';
import './App.css';

import NavBar from './components/NavBar';
import ChildComponent from './components/ChildComponent';
import ChildrenComponent from './components/ChildrenComponent';
import CompanionComponent from './components/CompanionComponent';
import DashboardComponent from './components/DashboardComponent';

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
              <Route path="/children/:id" component={ChildComponent} exact/>
              <Route path="/companions/:id" component={CompanionComponent} />
            </div>
          </BrowserRouter>
        </div>
      </div>
    );
  }
}

export default App;
