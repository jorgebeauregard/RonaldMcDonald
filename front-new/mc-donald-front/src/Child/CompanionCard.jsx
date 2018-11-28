import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

const CompanionCard = (props) => {

    function render(){
        return(
            props.data.map(companion =>
                <tr>
                    <td>companion.names</td>
                    <td>companion.relationship_name</td>
                    <td>Hola</td>
                </tr>
            )
        )
    }

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
                        {render}
                    </tbody>
                </table>
            </div>
        </div>
    );
}
 
export default CompanionCard;