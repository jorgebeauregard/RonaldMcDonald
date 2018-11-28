import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

const CompanionCard = (props) => {
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
                        {props.data.map(companion => 
                            <tr>
                                <td>{companion.names} {companion.flast_name} {companion.mlast_name}</td>
                                <td>{companion.relationship_name}</td>
                                <td><a className="button is-primary"><span className="icon"><i className="fas fa-info"></i></span></a></td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
        </div>
    );
}
 
export default CompanionCard;