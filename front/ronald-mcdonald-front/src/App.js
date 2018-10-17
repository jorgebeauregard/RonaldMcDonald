import React, { Component } from 'react';
import logo from './logo.svg';
import 'bulma/css/bulma.css';
import './App.css';

import NavBar from './components/NavBar';
import MainComponent from './components/MainComponent';
import ChildComponent from './components/ChildComponent';
import CompanionComponent from './components/CompanionComponent';
import DashboardComponent from './components/DashboardComponent';

class App extends Component {
  render() {
    return (
      <div className="margin-bottom">
        <NavBar />
      <div className="container is-fluid margin">
        <DashboardComponent/>
      </div>
      </div>
    );
  }
}

export default App;
