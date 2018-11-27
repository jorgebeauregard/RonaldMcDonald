import React, { Component } from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';
import { global } from './../global';
import axios from 'axios';

class AtHomeCard extends Component {
    state = { 
        data: {}
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/dashboard').then(res => {
            this.setState({data: res.data})
        });
    }

    renderKids(){
        if(this.state.data.hospital_kids){
            return(
                this.state.data.home_kids.map(child =>
                    <tr key={child.id}>
                        <td>{child.names}</td>
                        <td><button className="button is-danger"><span className="icon is-small"><i className="fas fa-hospital"></i></span></button></td>
                    </tr>
                )
            )
        }
        return
        
    }

    render() { 
        return ( 
            <div className="card">
                <div className="card-content">
                    <TitleCardSmall title="Niños en casa" background="success"></TitleCardSmall>
                    <table className="table is-fullwidth margin-top is-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.renderKids()}
                        </tbody>
                    </table>
                </div>
            </div>
         );
    }
}
 
export default AtHomeCard;