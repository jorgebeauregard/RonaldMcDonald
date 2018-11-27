import React, { Component } from 'react';

class TitleCardComponent extends Component {
    state = { 
        title: "",
        background: ""
    }

    componentDidMount(){
        this.renderStyle(this.props.title, this.props.background)
    }

    renderStyle(textName, backgroundName){
        this.setState({title: textName});
        switch(backgroundName){
            case 'success':
                this.setState({background: "card has-background-success animated zoomIn"});
                break;
            case 'warning':
                this.setState({background: "card has-background-warning animated zoomIn"});
                break;
            case 'primary':
                this.setState({background: "card has-background-primary animated zoomIn"});
                break;
            case 'danger':
                this.setState({background: "card has-background-danger animated zoomIn"});
                break;
            case 'link':
                this.setState({background: "card has-background-link animated zoomIn"});
                break;
        }
    }

    render() { 
        return (  
            <div className={this.state.background}>
                <div className="card-content">
                    <p className="title is-3 has-text-white">{this.state.title}</p>
                </div>
            </div>
        );
    }
}
 
export default TitleCardComponent;