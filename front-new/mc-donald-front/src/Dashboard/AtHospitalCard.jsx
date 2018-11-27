import React, { Component } from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';
import { global } from './../global';
import axios from 'axios';

class AtHospitalCard extends Component {
    state = { 
        data: {}
    }

    async componentDidMount(){
        await axios.get(global.globalURL + '/dashboard').then(res => {
            this.setState({data: res.data})
            console.log(this.state.data);
        });
    }

    renderKids(){
        if(this.state.data.hospital_kids){
            return(
                this.state.data.hospital_kids.map(child =>
                    <tr key={child.id}>
                        <td>{child.names}</td>
                        <td>{child.room_name}</td>
                        <td><button className="button is-success"><span className="icon is-small"><i className="fas fa-home"></i></span></button></td>
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
                    <TitleCardSmall title="Niños en hospital" background="danger"></TitleCardSmall>
                    <table className="table is-fullwidth margin-top is-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Habitación</th>
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
 
export default AtHospitalCard;