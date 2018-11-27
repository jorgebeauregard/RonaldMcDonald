import React, { Component } from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

class CompanionCard extends Component {
    state = {  }
    render() { 
        return ( 
            <div className="card">
                <div className="card-content">
                    <TitleCardSmall title="Acompañantes" background="danger"></TitleCardSmall>
                    <table className="table is-fullwidth margin-top">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Relación</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Flores</td>
                                <td>Padre</td>
                                <td><button className="button is-link"><span className="icon"><i className="fas fa-user"></i></span></button></td>
                            </tr>
                            <tr>
                                <td>Juan Flores</td>
                                <td>Padre</td>
                                <td><button className="button is-link"><span className="icon"><i className="fas fa-user"></i></span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        );
    }
}
 
export default CompanionCard;