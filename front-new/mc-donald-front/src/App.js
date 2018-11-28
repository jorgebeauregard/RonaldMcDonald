import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from "react-router-dom";

import Toolbar from './Toolbar/Toolbar';
import RoomsComponent from './Rooms/RoomsComponent';
import DashboardComponent from './Dashboard/DashboardComponent';
import ChildComponent from './Child/ChildComponent';
import ChildrenComponent from './Children/ChildrenComponent';
import CompanionComponent from './Companion/CompanionComponent';
import ErrorComponent from './Error/ErrorComponent';

import 'bulma/css/bulma.css'
import './App.css';


class App extends Component {
  render() {
    return (
      <div>
        <Toolbar/>
        <div className="container is-fluid">
          <Router>
            <div>
              <Route path="/" component={DashboardComponent} exact></Route>
              <Route path="/rooms" component={RoomsComponent} exact></Route>
              <Route path="/children/:id" component={ChildComponent} exact></Route>
              <Route path="/children" component={ChildrenComponent} exact></Route>
              <Route path="/companion/:id" component={CompanionComponent} exact></Route>
              <Route path="/404" component={ErrorComponent}></Route>
            </div>
          </Router>
        </div>
      </div>
    );
  }
}

export default App;
