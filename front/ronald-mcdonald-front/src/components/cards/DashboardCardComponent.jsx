import React, { Component } from 'react';

class DashboardCardComponent extends Component {
    state = { 
        background: "",
        icon: "",
        tile: "",
        content: ""
    }

    componentDidMount(){
        this.renderStyle(this.props.type);
    }

    renderStyle(props){
        switch(props){
            case 'registeredChildren':
                this.setState({background: "card has-background-warning animated zoomIn"});
                this.setState({icon: "fas fa-3x fa-user"});
                this.setState({title: "Niños registrados"});
                this.setState({content: "147"});
                break;
            case 'availableRooms':
                this.setState({background: "card has-background-success animated zoomIn"});
                this.setState({icon: "fas fa-3x fa-bed"});
                this.setState({title: "Habitaciones"});
                this.setState({content: "27/50"});
                break;
            case 'childrenAtHome':
                this.setState({background: "card has-background-primary animated zoomIn"});
                this.setState({icon: "fas fa-3x fa-home"});
                this.setState({title: "Niños en casa"});
                this.setState({content: "14/27"});
                break;
            case 'childrenAtHospital':
                this.setState({background: "card has-background-danger animated zoomIn"});
                this.setState({icon: "fas fa-3x fa-hospital"});
                this.setState({title: "Niños en hospital"});
                this.setState({content: "13/27"});
                break;
        }
    }

    render() { 
        return ( 
            <div>
                <a href="/children">
                    <div className={this.state.background}>
                        <div className="card-content">
                            <div className="columns">
                                <div className="column is-one-fifth">
                                    <span className="icon has-text-white padding">
                                        <i className={this.state.icon}></i>
                                    </span>
                                </div>
                                <div className="column">
                                    <div className="content">
                                        <p className="title is-5 has-text-white has-text-right has-text-left-mobile">{this.state.title}</p>
                                        <p className="subtitle is-1 has-text-white has-text-right has-text-left-mobile">{this.state.content}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        );
    }
}
 
export default DashboardCardComponent;